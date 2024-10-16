<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::all();
        return view("dashboard.finance.income", compact("incomes"));
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
        Income::create([
            'source'=>request('source'),
            'amount'=>request('amount'),
            'loggedBy'=>(Auth()->user()->fname).' '.(Auth()->user()->sname),
            'desc'=>request('desc'),
        ]);
        return back()->with('success','Income recorded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($source)
    {
        $incomes=Income::where('source', $source)->get();
        return view('dashboard.finance.income', compact('incomes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $income=Income::findOrFail($id);
        if(request('source')!=null){
            $income->source=request('source');
        }
        if(request('amount')!=null){
            $income->amount=request('amount');
        }
        if(request('desc')!=null){
            $income->desc=request('desc');
        }
        $income->update();
        return back()->with('success','Income record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Income::destroy($id);
        return back()->with('success','Record deleted successfully.');
    }
}
