<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;
    protected $fillable = [
        'vacancy_id',
        'applicant_name',
        'applicant_email',
        'applicant_contact',
        'cover_letter',
        'cv',
        'status',
        'message',
    ];
    public function vacancy(){
        return $this->belongsTo(vacancies::class,'vacancy_id','id');
    }
}
