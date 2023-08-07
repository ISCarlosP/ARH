<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $fillable = [
        'message_id',
        'message_text',
        'message_user_name',
        'message_user_phone',
        'message_user_phone',
        'message_user_mail',
        'message_creates_at',
        'message_status_id',
    ];

//    Relations

    public function messageStatus(){
        return $this->belongsTo('Messages', 'Message_status');
    }
}
