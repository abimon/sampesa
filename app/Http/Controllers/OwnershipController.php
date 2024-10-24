<?php

namespace App\Http\Controllers;

use App\Models\Ownership;
use Illuminate\Http\Request;

class OwnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step2_ownership',compact('id'));
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
        $project=Ownership::where('project_id',$id)->first();
        return view('',compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ownership $ownership)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ownership $ownership)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ownership $ownership)
    {
        //
    }
}
