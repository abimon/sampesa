<?php

namespace App\Http\Controllers;

use App\Models\CDevelopment;
use Illuminate\Http\Request;

class CDevelopmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        CDevelopment::create([
            "project_id" => request("project_id"),
            "any_current_devs" => request("any_current_devs"),
            "current_devs_pic" => request("current_devs_pic"),
            "current_dev_desc" => request("current_dev_desc"),
            "neighboring_devs" => request("neighboring_devs"),
            "single_available" => request("single_available"),
            "single_demand" => request("single_demand"),
            "single_rent" => request("single_rent"),
            "double_available" => request("double_available"),
            "double_demand" => request("double_demand"),
            "double_rent" => request("double_rent"),
            "bedsitter_available" => request("bedsitter_available"),
            "bedsitter_demand" => request("bedsitter_demand"),
            "bedsitter_rent" => request("bedsitter_rent"),
            "one_bd_available" => request("one_bd_available"),
            "one_bd_demand" => request("one_bd_demand"),
            "one_bd_rent" => request("one_bd_rent"),
            "two_bd_available" => request("two_bd_available"),
            "two_bd_demand" => request("two_bd_demand"),
            "two_bd_rent" => request("two_bd_rent"),
            "three_bd_available" => request("three_bd_available"),
            "three_bd_demand" => request("three_bd_demand"),
            "three_bd_rent" => request("three_bd_rent"),
            "mansionette_available" => request("mansionette_available"),
            "mansionette_demand" => request("mansionette_demand"),
            "mansionette_rent" => request("mansionette_rent"),
            "offices_available" => request("offices_available"),
            "offices_demand" => request("offices_demand"),
            "offices_rent" => request("offices_rent"),
            "space_shops_available" => request("space_shops_available"),
            "space_shops_demand" => request("space_shops_demand"),
            "space_shops_rent" => request("space_shops_rent"),
            "warehouse_available" => request("warehouse_available"),
            "warehouses_demand" => request("warehouses_demand"),
            "warehouse_rent" => request("warehouse_rent"),
            "hotels_air_bnb_available" => request("hotels_air_bnb_available"),
            "hotels_air_bnb_demand" => request("hotels_air_bnb_demand"),
            "hotels_air_bnb_rent" => request("hotels_air_bnb_rent")
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = CDevelopment::where('project_id', $id)->first();
        return view('dashboard.gis.step1_currentdev', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CDevelopment $cDevelopment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CDevelopment $cDevelopment)
    {

        $project = CDevelopment::where('project_id',request("project_id"))->first();
        if (request("any_current_devs") != null) {
            $project->any_current_devs = request("any_current_devs");
        }
        if (request("current_devs_pic") != null) {
            $project->current_devs_pic = request("current_devs_pic");
        }
        if (request("current_dev_desc") != null) {
            $project->current_dev_desc = request("current_dev_desc");
        }
        if (request("neighboring_devs") != null) {
            $project->neighboring_devs = request("neighboring_devs");
        }
        if (request("single_available") != null) {
            $project->single_available = request("single_available");
        }
        if (request("single_demand") != null) {
            $project->single_demand = request("single_demand");
        }
        if (request("single_rent") != null) {
            $project->single_rent = request("single_rent");
        }
        if (request("double_available") != null) {
            $project->double_available = request("double_available");
        }
        if (request("double_demand") != null) {
            $project->double_demand = request("double_demand");
        }
        if (request("double_rent") != null) {
            $project->double_rent = request("double_rent");
        }
        if (request("bedsitter_available") != null) {
            $project->bedsitter_available = request("bedsitter_available");
        }
        if (request("bedsitter_demand") != null) {
            $project->bedsitter_demand = request("bedsitter_demand");
        }
        if (request("bedsitter_rent") != null) {
            $project->bedsitter_rent = request("bedsitter_rent");
        }
        if (request("one_bd_available") != null) {
            $project->one_bd_available = request("one_bd_available");
        }
        if (request("one_bd_demand") != null) {
            $project->one_bd_demand = request("one_bd_demand");
        }
        if (request("one_bd_rent") != null) {
            $project->one_bd_rent = request("one_bd_rent");
        }
        if (request("two_bd_available") != null) {
            $project->two_bd_available = request("two_bd_available");
        }
        if (request("two_bd_demand") != null) {
            $project->two_bd_demand = request("two_bd_demand");
        }
        if (request("two_bd_rent") != null) {
            $project->two_bd_rent = request("two_bd_rent");
        }
        if (request("three_bd_available") != null) {
            $project->three_bd_available = request("three_bd_available");
        }
        if (request("three_bd_demand") != null) {
            $project->three_bd_demand = request("three_bd_demand");
        }
        if (request("three_bd_rent") != null) {
            $project->three_bd_rent = request("three_bd_rent");
        }
        if (request("mansionette_available") != null) {
            $project->mansionette_available = request("mansionette_available");
        }
        if (request("mansionette_demand") != null) {
            $project->mansionette_demand = request("mansionette_demand");
        }
        if (request("mansionette_rent") != null) {
            $project->mansionette_rent = request("mansionette_rent");
        }
        if (request("offices_available") != null) {
            $project->offices_available = request("offices_available");
        }
        if (request("offices_demand") != null) {
            $project->offices_demand = request("offices_demand");
        }
        if (request("offices_rent") != null) {
            $project->offices_rent = request("offices_rent");
        }
        if (request("space_shops_available") != null) {
            $project->space_shops_available = request("space_shops_available");
        }
        if (request("space_shops_demand") != null) {
            $project->space_shops_demand = request("space_shops_demand");
        }
        if (request("space_shops_rent") != null) {
            $project->space_shops_rent = request("space_shops_rent");
        }
        if (request("warehouse_available") != null) {
            $project->warehouse_available = request("warehouse_available");
        }
        if (request("warehouses_demand") != null) {
            $project->warehouses_demand = request("warehouses_demand");
        }
        if (request("warehouse_rent") != null) {
            $project->warehouse_rent = request("warehouse_rent");
        }
        if (request("hotels_air_bnb_available") != null) {
            $project->hotels_air_bnb_available = request("hotels_air_bnb_available");
        }
        if (request("hotels_air_bnb_demand") != null) {
            $project->hotels_air_bnb_demand = request("hotels_air_bnb_demand");
        }
        if (request("hotels_air_bnb_rent") != null) {
            $project->hotels_air_bnb_rent = request("hotels_air_bnb_rent");
        }
        $project->update();
        return back()->with("success","Project current development status updated successifully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CDevelopment $cDevelopment) {}
}
