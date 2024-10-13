<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth()->user()->role =='Admin'){
            $tasks = Task::all();
        }
        else{
            $tasks = Task::where('to',Auth()->user()->id)->orWhere('from',Auth()->user()->id)->get();
        }
        return view("dashboard.department.task", compact("tasks"));
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
        Task::create([
            'title'=>request('title'),
            'desc'=>request('desc'),
            'to'=>request('to'),
            'due_date'=>request('due_date'),
            'from'=>Auth()->user()->id,
            'status'=>'Not completed',
        ]);
        return back()->with('success','Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        // dd(request()->all());
        $task=Task::findOrFail($id);
        if(request('title')!=null){
            $task->title=request('title');
        }
        if(request('desc')!=null){
            $task->desc=request('desc');
        }
        if(request('to')!=null){
            $task->to=request('to');
        }
        if(request('status')!=null){
            $task->status=request('status');
        }
        if(request(key: 'due_date')!=null){
            $task->due_date=request('due_date');
        }
        $task->update();
        return back()->with('success','Task successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return back()->with('success','Task deleted successfully');
    }
}
