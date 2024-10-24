<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SUtility extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "electricity",
        "electricity_yes_phase",
        "electricity_no_distance",
        "water",
        "water_yes_source",
        "water_description",
        "water_no_distance",
        "sewer_line",
        "sewer_yes_distance",
        "access_roads",
        "access_roads_yes_type"
    ];
}
