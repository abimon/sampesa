<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'client_name',
        'client_contact',
        'client_id',
        'county',
        'town',
        'area',
        'status',
        'start_date',
        'cover'
    ];
}
