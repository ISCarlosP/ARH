<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthServices;
use App\Services\Utilities;
use App\Services\SessionServices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function create(Request $request){

        $utilities = new Utilities();
        $authServices = new AuthServices();
        $sessionServices = new SessionServices();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $response = $utilities->createResponse();
        $getValidation = $authServices->validateCredentials($credentials);

        if(!$getValidation['response']){
            return $getValidation;
        }

        $user = $authServices->getUserToAuth($credentials);

        if($user === null){
            $response['response'] = false;
            $response['exception'] = ['No hay usuarios registrados con esas credenciales'];

            return $response;
        }

        if(!$authServices->validatePassword(['password' => $credentials['password'], 'hash' => $user->password])){
            $response['response'] = false;
            $response['exception'] = ['La contraseña que ingresaste no es correcta'];

            return $response;
        }

        $sessionCookie = $sessionServices->createUserSession($user);
        $responseGral = new Response('sesion_iniciada');
        return $responseGral->withCookie($sessionCookie, $response);
    }
}
