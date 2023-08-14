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
        return Cookie::make($cookieInfo['cookie_type'],$cookieInfo['token'], $cookieInfo['time']?? 20);
    }
    public function getTokenByCookie(){
        $currentCookie = Cookie::get('session_token');

        return $currentCookie;
    }
}
