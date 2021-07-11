<?php

namespace App\Http\View\Composers;
use Illuminate\View\View;

class SocialMedialComposer {

    public function compose(View $view) {
        // $view->with('social_media', 'Mohammed');
        // $view->with('social_media', 'Mohammed');
        // $view->with('social_media', 'Mohammed');
        // $view->with('social_media', 'Mohammed');
        // $view->with('social_media', 'Mohammed');
        // $view->with('social_media', 'Mohammed');
        $view->with('social_media', '');
    }
}
