<?php

use Illuminate\Support\Facades\Route;
use Mypackages\Ourwork\Http\Controllers\OurworkController;

Route::get('ourwork', [OurworkController::class, 'index']);
