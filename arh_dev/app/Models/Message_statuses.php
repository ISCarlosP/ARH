<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_statuses extends Model
{
    use HasFactory;

    protected $table = 'message_statuses';
    protected $fillable = [
        'message_status_id',
        'message_status_name',
    ];
}
