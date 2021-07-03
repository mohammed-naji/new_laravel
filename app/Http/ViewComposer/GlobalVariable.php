<?php
namespace App\Http\ViewComposer;

use Illuminate\View\View;

class GlobalVariable{

    public function compose(View $view){

        $fb = 'https\Facebook.com';

        $view->with('fb',$fb);
    }

}
