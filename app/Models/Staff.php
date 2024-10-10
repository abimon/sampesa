<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        "role_id",
        "user_id"
    ] ;
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
    public function role()
    {
        return $this->belongsTo(roles::class, "role_id", "id");
    }
}
