<?php

namespace App\Providers\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Share the cart with all views
        View::share('cart', session()->get('cart', []));
    }

    public function register()
    {
        //
    }
}
