<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devnature extends Model
{
    use HasFactory;
    protected $fillable = [
        "sketch_map_file",
        "type_of_development",
        "sketch_map_recommendations",
        "project_id",
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
