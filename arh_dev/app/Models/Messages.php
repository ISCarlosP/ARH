<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $fillable = [
        'message_text',
        'message_user_name',
        'message_user_phone',
        'message_user_mail',
        'message_status_id',
    ];

//    Relations

    public function messageStatus(){
        return $this->belongsTo('message_statuses', 'message_status');
    }
}
