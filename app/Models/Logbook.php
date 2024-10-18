<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'make',
        'model',
        'type',
        'year',
        'mileage',
        'condition',
        'energy',
        'transition_type',
        'color',
        'lights_type',
        'airbags',
        'engine_number',
        'chasis_number',
        'number_plate',
        'engine_size',
    ];
}
