<?php

namespace App\Http\Controllers;

use App\Models\Devnature;
use Illuminate\Http\Request;

class DevnatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = request('id');
        return view('dashboard.gis.step7_nature',compact('id'));
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
    public function show(Devnature $devnature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devnature $devnature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devnature $devnature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devnature $devnature)
    {
        //
    }
}
