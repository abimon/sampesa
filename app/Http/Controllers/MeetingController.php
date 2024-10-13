<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth()->user()->role == 'Admin') {
            $meetings = Meeting::all();
        } else {
            $meetings = Meeting::where('department', Auth()->user()->role)->get();
        }
        return view("dashboard.department.meeting", compact("meetings"));
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
        Meeting::create([
            'department' => Auth()->user()->role,
            'title' => request('title'),
            'time' => request('time'),
            'date' => request('date'),
            'agenda' => request('agenda'),
        ]);
        return back()->with('success', 'Meeting scheduled successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meeting $meeting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meeting $meeting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $meeting=Meeting::findOrFail($id);
        if(request('title')){
            $meeting->title=request('title');
        }
        if(request('time')){
            $meeting->time=request('time');
        }
        if(request('date')){
            $meeting->date=request('date');
        }
        if(request('agenda')){
            $meeting->agenda=request('agenda');
        }
        $meeting->update();
        return back()->with('success', 'Meeting update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Meeting::destroy($id);
        return back()->with('success','Meeting deleted successfully.');
    }
}
