<?php

namespace App\Http\Controllers;

use App\Models\SUtility;
use Illuminate\Http\Request;

class SUtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step4_utility',compact('id'));
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
        SUtility::create([
            "project_id"=>request("project_id"),
            "electricity" => request("electricity"),
            "electricity_yes_phase" => request("electricity_yes_phase"),
            "electricity_no_distance" => request("electricity_no_distance"),
            "water" => request("water"),
            "water_yes_source" => request("water_yes_source"),
            "water_description" => request("water_description"),
            "water_no_distance" => request("water_no_distance"),
            "sewer_line" => request("sewer_line"),
            "sewer_yes_distance" => request("sewer_yes_distance"),
            "access_roads" => request("access_roads"),
            "access_roads_yes_type" => request("access_roads_yes_type"),
        ]);
        return back()->with("success","Utility details updated");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = SUtility::where('project_id',$id)->first();
        $project_id = $id;
        return view('dashboard.gis.step4_utility',compact('project','project_id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SUtility $sUtility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $project=SUtility::findOrFail($id);
        if(request("electricity")!=null){
            $project->electricity=request("electricity");
        }
        if(request("electricity_yes_phase")!=null){
            $project->electricity_yes_phase=request("electricity_yes_phase");
        }
        if(request("electricity_no_distance")!=null){
            $project->electricity_no_distance=request("electricity_no_distance");
        }
        if(request("water")!=null){
            $project->water=request("water");
        }
        if(request("water_yes_source")!=null){
            $project->water_yes_source=request("water_yes_source");
        }
        if(request("water_description")!=null){
            $project->water_description=request("water_description");
        }
        if(request("water_no_distance")!=null){
            $project->water_no_distance=request("water_no_distance");
        }
        if(request("sewer_line")!=null){
            $project->sewer_line=request("sewer_line");
        }
        if(request("sewer_yes_distance")!=null){
            $project->sewer_yes_distance=request("sewer_yes_distance");
        }
        if(request("access_roads")!=null){
            $project->access_roads=request("access_roads");
        }
        if(request("access_roads_yes_type")!=null){
            $project->access_roads_yes_type=request("access_roads_yes_type");
        }
        return back()->with("success","Utility details updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SUtility::destroy($id);
        return back()->with("success","Utility details deleted successfully.");
    }
}
