<?php

namespace Mypackages\Mainslider;

use Illuminate\Support\ServiceProvider;


class MainsliderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'mainslider');
    }

    public function register()
    {
        //
    }
}
