<?php

namespace App\Services;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthServices
{
    public function validateCredentials($credentials): array{

        $response = [
            'response' => true,
            'exception' => [],
        ];

        if($credentials['email'] === '' || $credentials['email'] === null ){
            $response['exception'][] = 'Dirección de correo no valida';
            $response['response'] = false;
        }

        if($credentials['password'] === '' || $credentials['password'] === null ){
            $response['exception'][] = 'Contraseña no valida';
            $response['response'] = false;
        }

        return $response;

    }
    public function getUserToAuth($credentials){
        $user =  Users::query()
            ->where('email', $credentials['email'])
            ->first()?? null;
        return $user;
    }
    public function generateHash($string): string{
        return Hash::make($string);
    }
    public function validatePassword($passwordData): bool{
        return Hash::check($passwordData['password'], $passwordData['hash']);
    }
}
