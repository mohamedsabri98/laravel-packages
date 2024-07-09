<?php


namespace Mypackages\Mainslider\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class MainSliderController extends Controller
{
    public function index()
    {
        return view('mainslider::index');
    }
}
