<?php

use Illuminate\Support\Facades\Route;
use Mypackages\Customerfeedback\Http\Controllers\CustomerfeedbackController;

Route::get('customer_feedback', [CustomerfeedbackController::class, 'index']);
