<?php

namespace Mypackages\Customerfeedback\Http\Controllers;

use Illuminate\Routing\Controller;


class CustomerfeedbackController extends Controller
{

    public function index()
    {
        return view('customerfeedback::index');
    }
}
