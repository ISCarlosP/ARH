<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id',
        'user_first_name',
        'user_last_name',
        'user_birth_date',
        'user_screen_name',
        'user_password',
    ];
}
