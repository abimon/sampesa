<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interview extends Model
{
    use HasFactory;
    protected $fillable = [
        "appication_id",
        "date",
        "mode",
        'venue',
        'details',
        'status'
    ];
    public function application(){
        return $this->belongsTo(application::class,'appication_id','id');
    }
}
