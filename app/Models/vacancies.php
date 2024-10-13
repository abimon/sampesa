<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancies extends Model
{
    use HasFactory;
    protected $fillable = [
        "role_id",
        "openings",
        'deadline',
        'app_mode'
    ];
}
