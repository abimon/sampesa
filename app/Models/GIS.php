<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GIS extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
        'assigner',
        'visit_date',
        'long',
        'lat',
        'dimensions',
        'soil_type',
        'area_value',
        'property_status',
        'tax_status',
        'arrears',
        'encumbrance',
        'evidence',
        'obstruction',
        'purpose',
        'site_cover'
    ];
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
