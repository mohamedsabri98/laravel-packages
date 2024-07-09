<?php

namespace Mypackages\Customerfeedback;

use Illuminate\Support\ServiceProvider;


class CustomerfeedbackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'customerfeedback');
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
