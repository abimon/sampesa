<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'recepient_id',
        'message',
        'isRead'
    ];
    function sender(){
        return $this->belongsTo(User::class, 'sender_id','id');
    }
}
