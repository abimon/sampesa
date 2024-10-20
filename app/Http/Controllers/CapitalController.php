<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CapitalController extends Controller
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
        $title_deed='';
        $bank_guarantee='';
        $fixed_deposit='';
        $logbook='';
        $ofiles = '';
        if(request()->hasFile("title_deed")){
            $extension = request()->file('title_deed')->getClientOriginalExtension();
            $title_deed = uniqid() . time() . '.' . $extension;
            request()->file('title_deed')->storeAs('public/user/loans/capital/title_deed', $title_deed);
        }
        if(request()->hasFile("bank_guarantee")){
            $extension = request()->file('bank_guarantee')->getClientOriginalExtension();
            $bank_guarantee = uniqid() . time() . '.' . $extension;
            request()->file('bank_guarantee')->storeAs('public/user/loans/capital/bank_guarantee', $bank_guarantee);
        }
        if(request()->hasFile("fixed_deposit")){
            $extension = request()->file('fixed_deposit')->getClientOriginalExtension();
            $fixed_deposit = uniqid() . time() . '.' . $extension;
            request()->file('fixed_deposit')->storeAs('public/user/loans/capital/fixed_deposit', $fixed_deposit);
        }
        if(request()->hasFile("logbook")){
            $extension = request()->file('logbook')->getClientOriginalExtension();
            $logbook = uniqid() . time() . '.' . $extension;
            request()->file('logbook')->storeAs('public/user/loans/capital/logbook', $logbook);
        }
        if(request()->hasFile("kra_pin")){
            $extension = request()->file('kra_pin')->getClientOriginalExtension();
            $kra_pin = uniqid() . time() . '.' . $extension;
            request()->file('kra_pin')->storeAs('public/user/loans/capital/kra_pin', $kra_pin);
        }
        if(request()->hasFile("business_no")){
            $extension = request()->file('business_no')->getClientOriginalExtension();
            $business_no = uniqid() . time() . '.' . $extension;
            request()->file('business_no')->storeAs('public/user/loans/capital/business_no', $business_no);
        }
        if(request()->hasFile("files")){
            $files = [];
            foreach(request()->file('files') as $file){
                $extension = $file->getClientOriginalExtension();
                $path = uniqid() . time() . '.' . $extension;
                $file->storeAs('public/user/loans/capital/files', $path);
                array_push($files, $path);
            }
            $ofiles = json_encode($files);
        }
        Capital::create([
            "user_id"=>Auth()->user()->id,
            'business_name'=>request('business_name'),
            'contact'=>request('contact'),
            'email'=>request('email'),
            'business_address'=>request('business_address'),
            'type_of_business'=>request('type_of_business'),
            'reg_no'=>request('reg_no'),
            'licence_no'=>request('licence_no'),
            'operational_years'=>request('operational_years'),
            'revenue'=>request('revenue'),
            'amount'=>request('amount'),
            'purpose'=>request('purpose'),
            'term'=>request('term'),
            'repayment_schedule'=>request('repayment_schedule'),
            'business_no'=>$business_no,
            'kra_pin'=>$kra_pin,
            'procure'=>request('procure'),
            'title_deed'=>$title_deed,
            'bank_guarantee'=>$bank_guarantee,
            'fixed_deposit'=>$fixed_deposit,
            'logbook'=>$logbook,
            'files'=>$ofiles,
        ]);
        Loan::create([
            'user_id'=>Auth()->user()->id,
            'loan'=>'Business Capital',
        ]);
        $data = [
            'header'=>'Successful Loan Application',
            'mess'=>'Your Business Capital loan request has been received successfully. We will get back to you on the progress.'
        ];
        $user = [
            'name' => Auth()->user()->fname,
            'email' => Auth()->user()->email,
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject("Successful Business Capital Loan Application");
            }
        );
        return back()->with('success','Loan application was successful. Check your email for more information');
    }

    /**
     * Display the specified resource.
     */
    public function show(Capital $capital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Capital $capital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Capital $capital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capital $capital)
    {
        //
    }
}
