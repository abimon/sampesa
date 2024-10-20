<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        'business_name',
        'contact',
        'email',
        'business_address',
        'type_of_business',
        'reg_no',
        'licence_no',
        'operational_years',
        'revenue',
        'amount',
        'purpose',
        'term',
        'repayment_schedule',
        'business_no',
        'kra_pin',
        'procure',
        'title_deed',
        'bank_guarantee',
        'fixed_deposit',
        'logbook',
        'files',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id',  'id');
    }
}
