<?php

use Illuminate\Support\Facades\Route;
use Mypackages\Contactus\Http\Controllers\ContactusController;

Route::get('contactus', [ContactusController::class, 'index']);
