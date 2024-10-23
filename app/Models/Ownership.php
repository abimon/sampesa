<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ownership extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "doc_type",
        "holder_name",
        "number",
        "doc_file",
        "means",
        "land_search",
        "land_search_evdnc",
        "survey_map",
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
