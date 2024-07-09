<?php

namespace MyPackages\Partners\Http\Controllers;

use Illuminate\Routing\Controller;

class PartnersController extends Controller
{
    public function index()
    {
        return view('partners::index');
    }
}
