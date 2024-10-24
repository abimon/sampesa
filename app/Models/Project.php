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
    public function amenity()
    {
        return $this->belongsTo(Amenity::class,'id','project_id');
    }
    public function nature()
    {
        return $this->belongsTo(Devnature::class,'id','project_id');
    }
    public function devtype()
    {
        return $this->belongsTo(Devtype::class,'id','project_id');
    }
    public function geoinfo()
    {
        return $this->belongsTo(Geoinfo::class,'id','project_id');
    }
    public function sutility()
    {
        return $this->belongsTo(SUtility::class,'id','project_id');
    }
    public function ownership()
    {
        return $this->belongsTo(Ownership::class,'id','project_id');
    }
    public function feasibility()
    {
        return $this->belongsTo(Feasiibility::class,'id','project_id');
    }
    public function cdev()
    {
        return $this->belongsTo(CDevelopment::class,'id','project_id');
    }
}
