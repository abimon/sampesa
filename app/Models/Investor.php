<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "occupation",
        "nKin",
        "nKin_rel",
        "nKin_contact",
    ];
}
