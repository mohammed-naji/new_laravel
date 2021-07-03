<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class VariableComposer {
    public function compose(View $view) {

        $header_links = [
            [
                'route' => 'portfolio.index',
                'text' => 'Home'
            ],
            [
                'route' => 'portfolio.about',
                'text' => 'About'
            ],
            [
                'route' => 'portfolio.contact',
                'text' => 'Contact'
            ],
        ];

        $view->with('header_links', $header_links);
        $view->with('fb', '########');
    }
}
