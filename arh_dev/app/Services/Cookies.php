<?php

namespace App\Services;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class Cookies
{
    public function validateCookieExist(Request $request){
        $cookiesArray = $request->cookies->all();
        return $request->cookie('visit_token');
    }

    public function createCookie($cookieInfo){
        return Cookie::make($cookieInfo['cookie_type'],$cookieInfo['token'], 1);
    }
}