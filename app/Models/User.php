<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "fname",
        "mname",
        "sname",
        "contact",
        "email",
        "nationality",
        "gender",
        "idNumber",
        "address",
        "krapin",
        "residence",
        "dob",
        "marital",
        "disability",
        "id_path",
        "kra_path",
        "pp_path",
        "nok",
        "nokcontact",
        "nokrelationship",
        "role_id",
        "password",
        "id_approved",
        "kra_approved"
    ];

    public function role(){
       return $this->belongsTo(roles::class,"role_id","id");
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function isOnline(){
        return Cache::has('is-online'.$this->id);
    }
    function messages(){
        return $this->hasMany(Message::class,'recepient_id','id');
    }
    
}
