<?php

namespace App\Services;

use App\Models\Session;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Services\Cookies;
use App\Services\Utilities;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SessionServices
{
    public function createUserSession($userData){
        $cookiesProvider = new Cookies();
        $utilities = new Utilities();
        $date = Carbon::now();
        $expiresAt = $date->copy()->addMinutes(120);

        $sessionToken = $utilities->generateToken(20);
        $timeStamp = $expiresAt->timestamp;

        $sessionCookie = $cookiesProvider->createCookie([
            'cookie_type' => 'session_token',
            'token' => $sessionToken,
            'time' => 120,
        ]);

        Session::create([
            'user_id' => $userData->id,
            'session_token' => $sessionToken,
        ]);

        return $sessionCookie;
    }
    public function existSession(Request $request){
        $cookiesArray = $request->cookies->all();
        return $request->cookie('session_token');
    }
    public function updateSessionTime(){
        $cookieProvider = new Cookies();

        $sessionCookie = $cookieProvider->createCookie([
            'cookie_type' => 'session_token',
            'token' => $cookieProvider->getTokenByCookie('session_token'),
            'time' => 120,
        ]);

        $session_token = $cookieProvider->getTokenByCookie('session_token');

        $session = Session::query()
            ->where('session_token', $session_token )
            ->first()?? null;

        if($session !== null){
            $date = Carbon::now()->setTimezone('America/Belize')->addHours(2);
            $session->expires_at = $date;
            $session->save();

            return $sessionCookie;
        }
    }
    public function getLoggedUser(){
        $sessionToken = Cookie::get('session_token');
        return           Users::query()
            ->select('id', 'first_name', 'last_name', 'user_birth_date', 'email', 'created_at', 'updated_at')
            ->where('id', Session::query()
                ->where('session_token', $sessionToken)
                ->value('user_id'))
            ->first();
    }
}
