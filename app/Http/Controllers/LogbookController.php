<?php

namespace App\Http\Controllers;

use App\Models\Logbook;
use Illuminate\Http\Request;

class LogbookController extends Controller
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
        if(request('make') == null){
            $make = request('other_makes');
        }
        else{
            $make = request('make');
        }
        Logbook::create([
            'user_id' => Auth()->user()->id,
            'make' => $make,
            'cmodel' => request('cmodel'),
            'type' => request('type'),
            'year' => request('year'),
            'mileage' => request('mileage'),
            'condition' => request('condition'),
            'energy' => request('energy'),
            'transition_type' => request('transition_type'),
            'color' => request('color'),
            'lights_type' => request('lights_type'),
            'airbags' => request('airbags'),
            'engine_number' => request('engine_number'),
            'chasis_number' => request('chasis_number'),
            'number_plate' => request('number_plate'),
            'engine_size' => request('engine_size'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $logbook = Logbook::findOrFail($id);
        
        if(request('make') == null){
            $logbook->make = request('other_makes');
        }
        if(request('other_make') == null){
            $logbook->make = request('other_makes');
        }
        if (request('cmodel') != null) {
            $logbook->cmodel = request('cmodel');
        }
        if (request('type') != null) {
            $logbook->type = request('type');
        }
        if (request('year') != null) {
            $logbook->year = request('year');
        }
        if (request('mileage') != null) {
            $logbook->mileage = request('mileage');
        }
        if (request('condition') != null) {
            $logbook->condition = request('condition');
        }
        if (request('energy') != null) {
            $logbook->energy = request('energy');
        }
        if (request('transition_type') != null) {
            $logbook->transition_type = request('transition_type');
        }
        if (request('color') != null) {
            $logbook->color = request('color');
        }
        if (request('lights_type') != null) {
            $logbook->lights_type = request('lights_type');
        }
        if (request('airbags') != null) {
            $logbook->airbags = request('airbags');
        }
        if (request('engine_number') != null) {
            $logbook->engine_number = request('engine_number');
        }
        if (request('chasis_number') != null) {
            $logbook->chasis_number = request('chasis_number');
        }
        if (request('number_plate') != null) {
            $logbook->number_plate = request('number_plate');
        }
        if (request('engine_size') != null) {
            $logbook->engine_size = request('engine_size');
        }
        return back()->with('success','Car details saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logbook $logbook)
    {
        //
    }
}
