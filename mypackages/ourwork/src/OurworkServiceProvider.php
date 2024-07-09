<?php

namespace Mypackages\Ourwork;

use Illuminate\Support\ServiceProvider;


class OurworkServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ourwork');
    }

    public function register()
    {
    }
}
