<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\roles;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deps = departments::all();
        return view("dashboard.hresource.departments", compact("deps"));
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
        departments::create(
            [
                'title'=>request('title'),
                'type'=>request('type'),
            ]
        );
        return back()->with('success','Department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $department= departments::find($id);
        return view('dashboard.hresource.roles', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departments $departments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $dep= departments::findOrFail($id);
        if(request('title')){
            $dep->title = request('title');
        }
        if(request('type')){
            $dep->title = request('title');
        }
        $dep->update();
        return back()->with('success','Department Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departments $departments)
    {
        //
    }
}
