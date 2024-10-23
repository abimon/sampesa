<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDevelopment extends Model
{
    use HasFactory;
    protected $fillable = [
        "project_id",
        "any_current_devs",
        "current_devs_pic",
        "current_dev_desc",
        "neighboring_devs",
        "single_available",
        "single_demand",
        "single_rent",
        "double_available",
        "double_demand",
        "double_rent",
        "bedsitter_available",
        "bedsitter_demand",
        "bedsitter_rent",
        "one_bd_available",
        "one_bd_demand",
        "one_bd_rent",
        "two_bd_available",
        "two_bd_demand",
        "two_bd_rent",
        "three_bd_available",
        "three_bd_demand",
        "three_bd_rent",
        "mansionette_available",
        "mansionette_demand",
        "mansionette_rent",
        "offices_available",
        "offices_demand",
        "offices_rent",
        "space_shops_available",
        "space_shops_demand",
        "space_shops_rent",
        "warehouse_available",
        "warehouses_demand",
        "warehouse_rent",
        "hotels_air_bnb_available",
        "hotels_air_bnb_demand",
        "hotels_air_bnb_rent"
    ];
    public function project(){
        return $this->belongsTo(Project::class,"project_id","id");
    }
}
