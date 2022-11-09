<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'bot_chat_id',
        'first_name',
        'last_name',
        'username',
        'chat_id',
    ];

    public function chat(){
        return $this->belongsTo(Chat::class);
    }
}
