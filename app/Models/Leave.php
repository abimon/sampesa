<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'l_date',
        'r_date',
        'user_id',
        'type',
        'status'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
