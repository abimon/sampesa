<?php

namespace App\Http\Controllers;

use App\Models\Feasiibility;
use Illuminate\Http\Request;

class FeasiibilityController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project=Feasiibility::where('project_id',$id)->first();
        return view('dashboard.gis.step1_status',compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feasiibility $feasiibility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feasiibility $feasiibility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feasiibility $feasiibility)
    {
        //
    }
}
