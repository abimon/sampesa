<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "type_of_employment",
        "employer",
        "job_title",
        "monthly_salary",
        "statement",
        "amount",
        "status"
    ];
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
