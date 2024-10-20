<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    protected $fillable = [
        'dep_id',
        'title',
        'job_description',
        'job_requirements',
    ];
    public function department(){
        return $this->belongsTo(departments::class,'dep_id','id');
    }
}
