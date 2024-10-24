<?php

namespace App\Http\Controllers;

use App\Models\Geoinfo;
use Illuminate\Http\Request;

class GeoinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step6_geo',compact('id'));
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
        // GIS::cre
    }

    /**
     * Display the specified resource.
     */
    public function show(Geoinfo $geoinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Geoinfo $geoinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Geoinfo $geoinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Geoinfo $geoinfo)
    {
        //
    }
}
