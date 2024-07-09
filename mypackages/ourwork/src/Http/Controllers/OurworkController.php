<?php

namespace Mypackages\Ourwork\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class OurworkController extends Controller
{
    public function index()
    {
        return view('ourwork::index');
    }
}
