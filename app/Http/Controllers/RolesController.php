<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth()->user()->role->title != 'Admin') {
            $role = roles::where('title', Auth()->user()->role->title)->first();
            $department = departments::findOrFail($role->dep_id);
            return view("dashboard.hresource.roles", compact("department"));
           
        }
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
        roles::create([
            'dep_id' => request('dep_id'),
            'title' => request('title'),
            'job_description' => request('job_description'),
            'job_requirements' => request('requirements'),
        ]);
        return redirect()->back()->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        roles::find($id)->update([
            'title' => request('title'),
            'job_description' => request('job_description'),
            'job_requirements' => request('requirements'),
        ]);
        return redirect()->back()->with('success', 'Role updated successful.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        roles::destroy($id);
        return redirect()->back()->with('success', 'Role deleted successfully.');
    }
}
