<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where([['role', '!=', 'Admin'],['role', '!=', 'Client']])->get();
        $leaves = Leave::all();
        $types = ['Maternity', 'Personal','Sick','Annual'];
        return view('dashboard.hresource.leave', compact('users','leaves','types'));
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
        Leave::create([
            'l_date'=>request('l_date'),
            'r_date'=>request('r_date'),
            'user_id'=>request('user_id'),
            'type'=>request('type'),
            'status'=>"Pending",
        ]);
        return back()->with("success","Leave added successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $leave = Leave::findorFail($id);
        if(request('l_date')!=null){
            $leave->l_date=request('l_date');
        }
        if(request('r_date')!=null){
            $leave->r_date=request('r_date');
        }
        if(request('status')!=null){
            $leave->status=request('status');
        }
        $leave->update();
        return back()->with('success','Leave updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
