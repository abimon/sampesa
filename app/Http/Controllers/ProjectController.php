<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::orderBy("created_at","desc")->get();
        return view("dashboard.pmanager.projects",compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = [
            'property-development',
            'drawing',
            'credit',
            'court',
            'collateral',
            'property-management',
            'value-addition',
            'biogas',
            'valuation'
        ];
        $clients = User::where("role_id",4)->get();
        return view("dashboard.pmanager.create",compact("cats",'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            'title'=>request('title'),
            'category'=>request('category'),
            'client_name'=>request('client_name'),
            'client_contact'=>request('client_contact'),
            'client_id'=>request('client_id'),
            'county'=>request('county'),
            'town'=>request('town'),
            'area'=>request('area')
        ]);
        return redirect()->route('project.index')->with('success','Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($status)
    {
        $projects = Project::where('status', $status)->get();
        return view("dashboard.pmanager.projects",compact("projects"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $project = Project::findOrFail($id);
        if(request('title')!=null){
            $project->title=request('title');
        }
        if(request('category')!=null){
            $project->category=request('category');
        }
        if(request('client_name')!=null){
            $project->client_name=request('client_name');
        }
        if(request('client_contact')!=null){
            $project->client_contact=request('client_contact');
        }
        if(request('client_id')!=null){
            $project->client_id=request('client_id');
        }
        if(request('county')!=null){
            $project->county=request('county');
        }
        if(request('town')!=null){
            $project->town=request('town');
        }
        if(request('area')!=null){
            $project->area=request('area');
        }
        if(request('status')!=null){
            $project->status=request('status');
        }
        if(request('start_date')!=null){
            $project->start_date=request('start_date');
        }
        if(request('cover')!=null){
            $project->cover=request('cover');
        }
        $project->update();
        return back()->with('success','Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
