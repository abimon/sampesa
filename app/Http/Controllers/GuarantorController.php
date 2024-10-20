<?php

namespace App\Http\Controllers;

use App\Models\Guarantor;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuarantorController extends Controller
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
        Guarantor::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Guarantor::create([
            "user_id" => Auth()->user()->id,
            "amount" => request('amount'),
            "fname" => request('fname'),
            "mname" => request('mname'),
            "sname" => request('sname'),
            "contact" => request('contact'),
            "occupation" => request('occupation'),
            "duration" => request('duration'),
            "idcard" => request('idcard'),
            "slip" => request('slip'),
            "fname1" => request('fname1'),
            "mname1" => request('mname1'),
            "sname1" => request('sname1'),
            "contact1" => request('contact1'),
            "occupation1" => request('occupation1'),
            "duration1" => request('duration1'),
            "idcard1" => request('idcard1'),
            "slip1" => request('slip1'),
        ]);
        Loan::create([
            'user_id'=>Auth()->user()->id,
            'loan'=>'Personal Guarantor',
        ]);
        $data = [
            'header'=>'Successful Loan Application',
            'mess'=>'Your Personal Guarantor loan request has been received successfully. We will get back to you on the progress.'
        ];
        $user = [
            'name' => Auth()->user()->fname,
            'email' => Auth()->user()->email,
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject("Successful Personal Guarantor Loan Application");
            }
        );
        return back()->with('success','Loan application was successful. Check your email for more information');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guarantor $guarantor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guarantor $guarantor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guarantor $guarantor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guarantor $guarantor)
    {
        //
    }
}
