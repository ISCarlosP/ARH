<?php

namespace App\Services;
use Illuminate\Http\Request;

class Cookies
{
    public function validateCookieExist(Request $request){
        return $request->cookie('visit_token');
    }

    public function createCookie(): object{

    }
}
