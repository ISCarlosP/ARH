<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(Request $request){

        $hello = Auth::user();

        $user = json_encode($hello);

        return view('users/dashboard');
    }
}
