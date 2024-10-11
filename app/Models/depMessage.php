<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class depMessage extends Model
{
    use HasFactory;
    protected $fillable = [
        'department',
        'subject',
        'message',
        'sender_id',
    ];
}
