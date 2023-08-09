<?php

namespace App\Services;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class Cookies
{
    public function validateCookieExist(Request $request){
        return $request->cookie('visit_token');
    }

    public function createCookie($cookieInfo){
        Cookie::make($cookieInfo['cookie_type'],$cookieInfo['token'], 10);
    }
}
