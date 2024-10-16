<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "amount",
        "deductions",
        "statement",
        "quest",
        "for",
        "status",
        "loggedBy"
    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function logger(){
        return $this->belongsTo(User::class,"loggedBy","id");
    }
}
