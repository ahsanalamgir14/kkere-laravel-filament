<?php

namespace App\Livewire\User;

use App\Models\Feedback;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Settings\GeneralSettings;
use App\Settings\SEOSettings;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class MyFeedback extends Component
{
    use SEOToolsTrait;

    public $feedbacks;

    public function mount()
    {
        $this->feedbacks = Feedback::where('seller_id', Auth::id())
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

        $title = __('messages.t_my_feedback') . " $separator " . $siteName;
        $description = $seoSettings->meta_description;

        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
    }

    public function render()
    {
        return view('livewire.user.my-feedback');
    }
}
