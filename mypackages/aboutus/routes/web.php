<?php

use Illuminate\Support\Facades\Route;
use Mypackages\Aboutus\Http\Controllers\AboutusController;



Route::get('/aboutus', [AboutusController::class, 'index']);
