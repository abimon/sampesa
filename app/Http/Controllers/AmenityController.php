<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step5_amenities',compact('id'));
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
    public function store(Request $request)
    {
        Amenity::create([
            "school_yes_no"=>request("school_yes_no"),
            "school_1_name"=>request("school_1_name"),
            "school_1_level"=>request("school_1_level"),
            "school_1_distance"=>request("school_1_distance"),
            "school_2_name"=>request("school_2_name"),
            "school_2_level"=>request("school_2_level"),
            "school_2_distance"=>request("school_2_distance"),
            "school_3_name"=>request("school_3_name"),
            "school_3_level"=>request("school_3_level"),
            "school_3_distance"=>request("school_3_distance"),
            "chief"=>request("chief"),
            "police_name"=>request("police_name"),
            "police_distance"=>request("police_distance"),
            "hospital"=>request("hospital"),
            "hospital_1_name"=>request("hospital_1_name"),
            "hospital_1_distance"=>request("hospital_1_distance"),
            "hospital_1_owner"=>request("hospital_1_owner"),
            "hospital_2_name"=>request("hospital_2_name"),
            "hospital_2_distance"=>request("hospital_2_distance"),
            "hospital_2_owner"=>request("hospital_2_owner"),
            "hospital_3_name"=>request("hospital_3_name"),
            "hospital_3_distance"=>request("hospital_3_distance"),
            "hostipal_3_owner"=>request("hostipal_3_owner"),
        ]);
        return back()->with("success","Amenities updated.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Amenity $amenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amenity $amenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amenity $amenity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Amenity $amenity)
    {
        //
    }
}
