<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class InvestorController extends Controller
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
        return view("dashboard.investor.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (request()->hasFile('idCard')) {
            $extension = request()->file('idCard')->getClientOriginalExtension();
            $id_path = (request('fname')) . uniqid() . time() . '.' . $extension;
            request()->file('idCard')->storeAs('public/users/idCards', $id_path);
            $id_path;
        }
        if (request()->hasFile('passport')) {
            $extension = request()->file('passport')->getClientOriginalExtension();
            $pp_path = (request('fname')) . uniqid() . time() . '.' . $extension;
            request()->file('passport')->storeAs('public/users/passports', $pp_path);
        }
        $user=User::where('email',request('email'))->orWhere('contact',request('contact'))->first();
        if (!$user) {
            $user = User::create([
                "fname" => request('fname'),
                "mname"=> request("mname"),
                "sname" => request('sname'),
                "contact" => request('contact'),
                "gender"=> request("gender"),
                "email" => request('email'),
                "idNumber" => request('idNumber'),
                "nationality" => request('nationality'),
                "address" => request('address'),
                "pp_path"=>$pp_path,
                "id_path"=>$id_path,
                "role_id" => "5",
                "isAdmin" => false,
                "password" => Hash::make("Investor!#@" . date('Y')),
            ]);
        }
        if (!Investor::where('user_id', $user->id)->exists()) {
            Investor::create([
                "user_id" => $user->id,
                "occupation" => request('occupation'),
                "nKin" => request('nKin'),
                "nKin_rel" => request('nKin_rel'),
                "nKin_contact" => request('nKin_contact')
            ]);
        }
        $data = [
            'header'=>'Successful Registration',
            'mess'=>'Thank you for your interest to join our investors. Your application will be processed and here notified. Kindly login by clicking <a href="https://sampesagroup.com/login">here</a> and use your email ('.$user->email.') as your email to reset your password incase you don\'t know it.'
        ];
        $user = [
            'name' => request('fname'),
            'email' => request('email'),
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject("Successful Investor Registration");
            }
        );
        return back()->with('success','Your application has been received successfully. Check your email for more information.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Investor $investor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investor $investor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investor $investor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investor $investor)
    {
        //
    }
}
