<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'name',
        'ticker',
        'quantity',
        'value',
        'certificate',
        'certificate_number',
        'amount'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
