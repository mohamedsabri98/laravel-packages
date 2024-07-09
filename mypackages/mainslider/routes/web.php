
<?php

use Illuminate\Support\Facades\Route;
use Mypackages\Mainslider\Http\Controllers\MainSliderController;

Route::get('/mainslider', [MainSliderController::class, 'index']);
