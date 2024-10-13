<?php

namespace App\Http\Controllers;

use App\Models\GIS;
use Illuminate\Http\Request;

class GISController extends Controller
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
    public function store(Request $request)
    {
        GIS::create([
            'project_id'=>request(''),
            'user_id'=>request(''),
            'assigner'=>request(''),
            'visit_date'=>request(''),
            
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(GIS $gIS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GIS $gIS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $gis=GIS::findOrFail($id);
        if(request('project_id')!=null){
            $gis->project_id=request('project_id');
        }
        if(request('user_id')!=null){
            $gis->user_id=request('user_id');
        }
        if(request('assigner')!=null){
            $gis->assigner=request('assigner');
        }
        if(request('visit_date')!=null){
            $gis->visit_date=request('visit_date');
        }
        if(request('long')!=null){
            $gis->long=request('long');
        }
        if(request('lat')!=null){
            $gis->lat=request('lat');
        }
        if(request('dimensions')!=null){
            $gis->dimensions=request('dimensions');
        }
        if(request('soil_type')!=null){
            $gis->soil_type=request('soil_type');
        }
        if(request('area_value')!=null){
            $gis->area_value=request('area_value');
        }
        if(request('property_status')!=null){
            $gis->property_status=request('property_status');
        }
        if(request('tax_status')!=null){
            $gis->tax_status=request('tax_status');
        }
        if(request('arrears')!=null){
            $gis->arrears=request('arrears');
        }
        if(request('encumbrance')!=null){
            $gis->encumbrance=request('encumbrance');
        }
        if(request('evidence')!=null){
            $gis->evidence=request('evidence');
        }
        if(request('obstruction')!=null){
            $gis->obstruction=request('obstruction');
        }
        if(request('purpose')!=null){
            $gis->purpose=request('purpose');
        }
        if(request('site_cover')!=null){
            $gis->site_cover=request('site_cover');
        }
        $gis->update();
        return redirect('gis.index')->with('success','Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GIS $gIS)
    {
        //
    }
}
