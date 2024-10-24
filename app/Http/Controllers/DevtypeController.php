<?php

namespace App\Http\Controllers;

use App\Models\Devtype;
use Illuminate\Http\Request;

class DevtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step8_type',compact('id'));
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
    public function show(Devtype $devtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devtype $devtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devtype $devtype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devtype $devtype)
    {
        //
    }
}
