<?php

namespace App\Services;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Utilities
{
    public function validateEmail($email){
        return (preg_match('^[\w\.-]+@[\w\.-]+\.\w+$^', $email));
    }
}
