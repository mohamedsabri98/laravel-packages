<?php

namespace MyPackages\Partners;

use Illuminate\Support\ServiceProvider;

class PartnersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'partners');
    }

    public function register()
    {
        // Register any bindings or singletons here
    }
}
