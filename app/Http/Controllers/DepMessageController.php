<?php

namespace App\Http\Controllers;

use App\Models\depMessage;
use Illuminate\Http\Request;

class DepMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages =depMessage::where('department',Auth()->user()->role->department->title)->orderBy("created_at","desc")->get();
        $department = Auth()->user()->role->department->title;
        return view("dashboard.department.messages", compact("messages","department"));
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
        depMessage::create([
            'department'=>Auth()->user()->role,
            'subject'=>(Auth()->user()->role).' department messages',
            'message'=>request('message'),
            'sender_id'=>Auth()->user()->id,
        ]);
        return back()->with('success','Message sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($dep)
    {
        $messages =depMessage::where('department',$dep)->orderBy("created_at","desc")->get();
        $department = $dep;
        return view("dashboard.department.messages", compact("messages","department"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(depMessage $depMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, depMessage $depMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        depMessage::destroy($id);
        return back()->with('success','Message deleted successful.');
    }
}
