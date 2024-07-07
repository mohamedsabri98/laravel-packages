<?php

namespace MyPackages\Aboutus;

use Illuminate\Support\ServiceProvider;

class AboutusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'aboutus');
    }

    public function register()
    {
        // Register any bindings or singletons here
    }
}
