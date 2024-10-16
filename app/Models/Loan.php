<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'desc',
        'interest',
        'cover'
    ];
    public function photos(){
        return $this->hasMany(LoanFile::class,'loan_id','id');
    }
}
