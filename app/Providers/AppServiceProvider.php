<?php

namespace App\Providers;

use App\Http\View\Composers\SocialMedialComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposer\GlobalVariable;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // View::composer('protfolio.master', SocialMedialComposer::class);
        // View::composer('portfolio.master',GlobalVariable::class);
        // view()->share('fb', '##############');
    }
}
