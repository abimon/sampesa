<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Payslip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if (request()->hasFile('statement')) {
            $extension = request()->file('statement')->getClientOriginalExtension();
            $path = uniqid() . time() . '.' . $extension;
            request()->file('statement')->storeAs('public/user/loans/payslip/statements', $path);
        }
        Payslip::create([
            "user_id"=>Auth()->user()->id,
            "type_of_employment"=>request("type_of_employment"),
            "employer"=>request("employer"),
            "job_title"=>request("job_title"),
            "monthly_salary"=>request("monthly_salary"),
            "statement"=>$path,
            "amount"=>request("amount"),
            'status'=>"Pending"
        ]);
        Loan::create([
            'user_id'=>Auth()->user()->id,
            'loan'=>'Payslip',
        ]);
        $data = [
            'header'=>'Successful Loan Application',
            'mess'=>'Your Payslip loan request has been received successfully. We will get back to you on the progress.'
        ];
        $user = [
            'name' => Auth()->user()->fname,
            'email' => Auth()->user()->email,
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject("Successful Capital Loan Application");
            }
        );
        return back()->with("success","Your application has been submitted successfully. Check your email for more information.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Payslip $payslip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payslip $payslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payslip $payslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payslip $payslip)
    {
        //
    }
}
