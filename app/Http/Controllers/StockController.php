<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StockController extends Controller
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
        if(request()->hasFile("certificate")){
            $extension = request()->file('certificate')->getClientOriginalExtension();
            $certificate = uniqid() . time() . '.' . $extension;
            request()->file('certificate')->storeAs('public/user/loans/stock', $certificate);
        }
        Stock::create([
            'user_id'=>Auth()->user()->id,
            'type'=>request('type'),
            'name'=>strtoupper(request('name')),
            'ticker'=>strtoupper(request('ticker')),
            'quantity'=>request('quantity'),
            'value'=>request('value'),
            'certificate'=>$certificate,
            'certificate_number'=>strtoupper(request('certificate_number')),
            'amount'=>request('amount'),
        ]);
        Loan::create([
            'user_id'=>Auth()->user()->id,
            'loan'=>'Stocks & Bonds',
        ]);
        $data = [
            'header'=>'Successful Loan Application',
            'mess'=>'Your Stock/Bond loan request has been received successfully. We will get back to you on the progress.'
        ];
        $user = [
            'name' => Auth()->user()->fname,
            'email' => Auth()->user()->email,
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject("Successful Stock/Bond Loan Application");
            }
        );
        return back()->with('success','Loan application was successful. Check your email for more information');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
