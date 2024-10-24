<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geoinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "latitude",
        "longitude",
        "site_photo",
        "site_description"
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
