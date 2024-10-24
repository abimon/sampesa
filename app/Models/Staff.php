<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "bank",
        "account",
        "gross",
        "Allowance",
        "NHIF",
        "NSSF",
        "PAYE",
        "Other",
    ] ;
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
