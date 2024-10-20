<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guarantor extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "amount",
        "fname",
        "mname",
        "sname",
        "contact",
        "occupation",
        "duration",
        "idcard",
        "slip",
        "fname1",
        "mname1",
        "sname1",
        "contact1",
        "occupation1",
        "duration1",
        "idcard1",
        "slip1",
    ];
}
