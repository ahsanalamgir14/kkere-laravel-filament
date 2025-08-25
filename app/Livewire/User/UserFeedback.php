<?php

namespace App\Livewire\User;

use App\Models\Feedback;
use App\Models\User;
use Livewire\Component;
use App\Settings\GeneralSettings;
use App\Settings\SEOSettings;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class UserFeedback extends Component
{
    use SEOToolsTrait;

    public User $user;
    public $feedbacks;

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->feedbacks = Feedback::where('seller_id', $id)
            ->with(['buyer'])
            ->latest()
            ->get();
        
        $this->setSeoData();
    }

    protected function setSeoData()
    {
        $generalSettings = app(GeneralSettings::class);
        $seoSettings = app(SEOSettings::class);

        $separator = $generalSettings->separator ?? '-';
        $siteName = $generalSettings->site_name ?? app_name();

        $title = __('messages.t_feedback_for') . ' ' . $this->user->name . " $separator " . $siteName;
        $description = $seoSettings->meta_description;

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
    }

    public function render()
    {
        return view('livewire.user.user-feedback');
    }
}
