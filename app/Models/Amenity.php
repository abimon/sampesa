<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "school_yes_no",
        "school_1_name",
        "school_1_level",
        "school_1_distance",
        "school_2_name",
        "school_2_level",
        "school_2_distance",
        "school_3_name",
        "school_3_level",
        "school_3_distance",
        "chief",
        "police_name",
        "police_distance",
        "hospital",
        "hospital_1_name",
        "hospital_1_distance",
        "hospital_1_owner",
        "hospital_2_name",
        "hospital_2_distance",
        "hospital_2_owner",
        "hospital_3_name",
        "hospital_3_distance",
        "hostipal_3_owner",
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
