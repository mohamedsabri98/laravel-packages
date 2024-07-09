<?php

namespace Mypackages\Contactus\Http\Controllers;

use Illuminate\Routing\Controller;



class ContactusController extends Controller{
    public function index(){
        return view('contactus::index');
    }
}

