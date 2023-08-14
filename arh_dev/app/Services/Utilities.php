<?php

namespace App\Services;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class Utilities
{
    public function validateEmail($email){
        return (preg_match('^[\w\.-]+@[\w\.-]+\.\w+$^', $email));
    }
    public function createResponse(): array{
        return ['response' => true, 'message' => 'Tu solicitud fue lanzada con exito'];
    }
    public function generateToken($charCount): string{
        return Str::random($charCount);
    }
}
