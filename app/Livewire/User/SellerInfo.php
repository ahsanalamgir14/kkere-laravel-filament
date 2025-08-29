<?php

namespace App\Livewire\User;

use App\Models\Page;
use App\Models\User;
use App\Models\Ad;
use App\Models\ContactAnalytic;
use App\Models\Conversation;
use App\Models\Message;
use App\Settings\AdSettings;
use App\Settings\LiveChatSettings;
use App\Settings\PhoneSettings;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Parsedown;

class SellerInfo extends Component
{
    public $user;
    public $ad;
    public $followersList = [];
    public $followingList = [];
    public $showFollowers = false;
    public $extraClass = '';
    public $isWebsite;
    public $revealed;
    /**
     * Mount lifecycle hook.
     */
    public function mount(Ad $ad, $userId = null)
    {
        $this->user = $userId ? User::find($userId) : $ad->user;
        if (!app(PhoneSettings::class)->enable_number_reveal_duplicate) $this->stopDuplicateReveal();
    }

    public function showFollowersModal()
    {
        $this->showFollowers = true;
        $this->followersList = $this->user->followers()->get();
        $this->dispatch('open-modal', id: 'follow-modal');
    }

    public function showFollowingModal()
    {
        $this->showFollowers = false;
        $this->followingList = $this->user->following()->get();
        $this->dispatch('open-modal', id: 'follow-modal');
    }

    public function toggleFollow()
    {
        if (auth()->guest()) {
            Notification::make()
                ->title(__('messages.t_login_or_signup_to_follow'))
                ->info()
                ->send();
            return false;
        }

        if ($this->user->id == auth()->id()) {
            Notification::make()
                ->title(__('messages.t_cannot_follow_own_profile'))
                ->info()
                ->send();
            return;
        }

        if ($this->user->followers()->where('follower_id', auth()->id())->exists()) {
            // User is already following, so unfollow
            $this->user->followers()->detach(auth()->id());
        } else {
            // User is not following, so follow
            $this->user->followers()->attach(auth()->id());
        }
    }

    public function getFollowersCountProperty()
    {
        return $this->user->followers()->count();
    }

    public function getFollowingCountProperty()
    {
        return $this->user->following()->count();
    }

    public function isFollowing()
    {
        return auth()->check() && $this->user->followers()->where('follower_id', auth()->id())->exists();
    }

    public function chatWithSeller($messageContent = null)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            Notification::make()
                ->title(__('messages.t_must_be_logged_to_chat'))
                ->danger()
                ->send();
            return redirect(route('login'));
        }

        // Check if user verification is required to post ads or chat
        $verificationRequired = app(AdSettings::class)->user_verification_required;
        $user = auth()->user();

        if ($verificationRequired && (!$user || !$user->verified)) {
            // Redirect to a verification required page if the user is not verified
            Notification::make()
                ->title(__('messages.t_verification_required_to_chat'))
                ->danger()
                ->send();
            return redirect()->route('verification-required');
        }

        // Get the authenticated user's ID
        $buyerId = Auth::id();

        // Prevent the owner of the ad from chatting with themselves
        if ($buyerId == $this->ad->user_id) {
            Notification::make()
                ->title(__('messages.t_cannot_chat_with_yourself'))
                ->danger()
                ->send();
            return;
        }


        // Check if a conversation already exists
        $conversation = Conversation::where('ad_id', $this->ad->id)
            ->where('buyer_id', $buyerId)
            ->where('seller_id', $this->ad->user_id)
            ->first();

        // If conversation does not exist, create one
        if (!$conversation) {
            $conversation = Conversation::create([
                'ad_id' => $this->ad->id,
                'buyer_id' => $buyerId,
                'seller_id' => $this->ad->user_id
            ]);
        }

        // If there's a message content passed, send it
        if ($messageContent) {
            $this->sendMessage($conversation->id, $this->ad->user_id, $messageContent);
        }
        // Redirect to the messaging page with the conversation_id
        if (app('filament')->hasPlugin('live-chat') && app(LiveChatSettings::class)->enable_livechat) {
            return redirect('/messages/' . $conversation->id);
        } else {
            return redirect('/my-messages?conversation_id=' . $conversation->id);
        }
    }

    /**
     * Send a message within a conversation.
     *
     * @param int $conversationId The ID of the conversation.
     * @param int $receiverId The ID of the receiver.
     * @param string $content The content of the message.
     */
    public function sendMessage($conversationId, $receiverId, $content)
    {
        Message::create([
            'conversation_id' => $conversationId,
            'sender_id' => Auth::id(),
            'receiver_id' => $receiverId,
            'content' => $content
        ]);
    }

    /**
     * Renders the PageDetail view.
     */
    public function revealContact()
    {
        $buyerId = Auth::id();

        // if ($buyerId == $this->ad->user_id) {
        // Notification::make()
        // ->title(__('messages.t_cannot_reveal_with_yourself'))
        // ->danger()
        // ->send();
        // return;
        // }

        $this->revealed = true;

        if (!auth()->check()) return;

        ContactAnalytic::create([
            'user_id' => auth()->id(),
            'ad_id' => $this->ad->id,
            'viewer_name' => auth()->user()->name,
            'viewer_phone' => auth()->user()->phone_number,
            'viewer_email' => auth()->user()->email,
            'ad_price' => $this->ad->price,
            'ad_url' => config('app.url') . '/ad/' . $this->ad->slug,
        ]);

        Notification::make()
            ->title(__('Seller contact information is now visible'))
            ->success()
            ->send();
    }

    public function stopDuplicateReveal()
    {
        $phoneNumber = ContactAnalytic::where('ad_id', $this->ad->id)->where('user_id', auth()->id())->count();
        if ($phoneNumber) {
            $this->revealed = true;
        }
    }

    public function chatWithWhatsapp()
    {
        // Prevent the owner of the ad from chatting with themselves (if logged in)
        if (auth()->check() && auth()->id() == $this->ad->user_id) {
            Notification::make()
                ->title(__('messages.t_cannot_chat_with_yourself'))
                ->danger()
                ->send();
            return;
        }

        // Get the WhatsApp number with proper fallback logic - prioritize ad's contact details
        $phoneNumber = null;

        // First check if ad has WhatsApp number and it's enabled for display
        if ($this->ad->whatsapp_number && $this->ad->display_whatsapp) {
            $phoneNumber = $this->ad->whatsapp_number;
        }
        // Then check if ad has phone number and it's enabled for display
        elseif ($this->ad->phone_number && $this->ad->display_phone) {
            $phoneNumber = $this->ad->phone_number;
        }
        // Fallback to user's WhatsApp number
        elseif ($this->ad->user->whatsapp_number) {
            $phoneNumber = $this->ad->user->whatsapp_number;
        }
        // Final fallback to user's phone number
        else {
            $phoneNumber = $this->ad->user->phone_number;
        }

        // Check if we have a valid phone number
        if (empty($phoneNumber)) {
            Notification::make()
                ->title(__('messages.t_no_whatsapp_number_available'))
                ->danger()
                ->send();
            return;
        }

        // Clean and format the phone number for WhatsApp
        $phoneNumber = $this->formatPhoneNumberForWhatsApp($phoneNumber);

        // Create the French WhatsApp message with ad link
        $adLink = route('ad.overview', ['slug' => $this->ad->slug]);
        $whatsappMessage = "Je suis intéressé par votre annonce sur kkere {$adLink}. Est-ce toujours disponible ?";

        $whatsappUrl = "https://wa.me/" . $phoneNumber . "/?text=" . urlencode($whatsappMessage);

        // Redirect to the WhatsApp URL
        return redirect()->away($whatsappUrl);
    }

    /**
     * Format phone number for WhatsApp API
     */
    private function formatPhoneNumberForWhatsApp($phoneNumber)
    {
        // Remove all non-numeric characters except plus sign
        $phoneNumber = preg_replace('/[^0-9+]/', '', $phoneNumber);

        // If it starts with +, remove it and process
        $hasPlus = false;
        if (strpos($phoneNumber, '+') === 0) {
            $hasPlus = true;
            $phoneNumber = substr($phoneNumber, 1);
        }

        // Remove leading zeros
        $phoneNumber = ltrim($phoneNumber, '0');

        // If the number is less than 10 digits, it's likely a local number
        // Add default country code (you can make this configurable)
        if (strlen($phoneNumber) < 10) {
            $phoneNumber = '1' . $phoneNumber; // Default to US (+1)
        }

        // Ensure it's a valid international format
        if (strlen($phoneNumber) >= 10 && strlen($phoneNumber) <= 15) {
            return $phoneNumber;
        }

        // If still not valid, return original with plus
        return $hasPlus ? '+' . $phoneNumber : $phoneNumber;
    }

    /**
     * Renders the PageDetail view.
     */
    public function render()
    {
        return view('livewire.user.seller-info');
    }
}
