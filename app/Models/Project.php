<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'client_id',
        'county',
        'town',
        'area',
        'status',
        'start_date',
        'cover'
    ];
    public function client(){
        return $this->belongsTo(User::class,'client_id','id');
    }
}
