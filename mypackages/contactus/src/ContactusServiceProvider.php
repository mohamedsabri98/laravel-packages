<?php

namespace Mypackages\Contactus;

use Illuminate\Support\ServiceProvider;


class ContactusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'contactus');
    }
    public function register()
    {
    }
}
