<?php

namespace MyPackages\Aboutus\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        return view("aboutus::index");
    }
}
