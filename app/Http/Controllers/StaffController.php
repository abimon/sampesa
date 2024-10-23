<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('dashboard.hresource.staff', compact('staffs'));
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
    public function store()
    {
            $staff=Staff::where('user_id',request("user_id"))->first();
            $user=User::find(request("user_id"));
            $user->isAdmin = true;
            $user->role_id = request('role_id');
            $user->update();
            if (!$staff) {
                Staff::create(
                    [
                        "user_id"=>request("user_id"),
                        "bank"=>request("bank"),
                        "account"=>request("account"),
                        "gross"=>request("gross"),
                        "Allowance"=>request("Allowance"),
                        "NHIF"=>request("NHIF"),
                        "NSSF"=>request("NSSF"),
                        "PAYE"=>request("PAYE"),
                        "Other"=>request("Other")
                    ]
                );
                return back()->with("success","Staff Created successfull.");
            } 
            return back()->with("success","Staff already exist.");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $staff = Staff::findOrFail($id);
        if(request('gross')!=null){
            $staff->gross=request('gross');
        }
        if(request('Allowance')!=null){
            $staff->Allowance=request('Allowance');
        }
        if(request('NHIF')!=null){
            $staff->NHIF=request('NHIF');
        }
        if(request('NSSF')!=null){
            $staff->NSSF=request('NSSF');
        }
        if(request('PAYE')!=null){
            $staff->PAYE=request('PAYE');
        }
        if(request('Other')!=null){
            $staff->Other=request('Other');
        }
        if(request('bank')!=null){
            $staff->bank=request('bank');
        }
        if(request('account')!=null){
            $staff->account=request('account');
        }
        $staff->update();
        return back()->with('success','Staff details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Staff::findOrFail($id)->user_id;
        // return $user;
        User::where('id',$user)->update(['role_id'=>3,'isAdmin'=>false]);
        Staff::destroy($id);
        return back()->with('success','Staff removed successfully.');
    }
}
