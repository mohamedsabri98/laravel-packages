<?php

use Illuminate\Support\Facades\Route;
use MyPackages\Partners\Http\Controllers\PartnersController;

Route::get('partners', [PartnersController::class, 'index']);
