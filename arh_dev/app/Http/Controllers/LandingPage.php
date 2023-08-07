<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index(){


        return view('landing_page');
    }
}
