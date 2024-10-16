<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salaries = Salary::orderBy("created_at","desc")->get();
        return view("dashboard.finance.salary", compact("salaries"));
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
        if(request('deductions')>0){
            $deduction=request('deductions');
        }else{
            $deduction= 0;
        }
        Salary::create([
            "user_id"=>request('user_id'),
            "amount"=>request('amount'),
            "deductions"=>$deduction,
            'statement'=>request('statement'),
            "quest"=>request('quest'),
            "for"=>request('for'),
            "status"=>request('status'),
            'loggedBy'=>Auth()->user()->id,
        ]);
        return back()->with('success','Salaryentry made successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $sal=Salary::findOrFail($id);
        if(request('user_id')){
            $sal->user_id=request('user_id');
        }
        if(request('amount')){
            $sal->amount=request('amount');
        }
        if(request('deductions')){
            $sal->deductions=request('deductions');
        }
        if(request('statement')){
            $sal->statement=request('statement');
        }
        if(request('quest')){
            $sal->quest=request('quest');
        }
        if(request('for')){
            $sal->for=request('for');
        }
        if(request('status')){
            $sal->status=request('status');
        }
        if(request('loggedBy')){
            $sal->loggedBy=request('loggedBy');
        }
        $sal->update();
        return back()->with('success','Payroll updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Salary::destroy($id);
        return back()->with('success','Payroll entry deleted successfully.');
    }
}
