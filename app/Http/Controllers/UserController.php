<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $users = User::where([['role_id','3'],['krapin','!=',null]])->get();
        // $users = User::all();
        // foreach ($users as $user) {
        //     $user->fname = ucwords($user->fname);
        //     $user->mname = ucwords($user->mname);
        //     $user->sname = ucwords($user->sname);
        //     $user->email = strtolower($user->email);
        //     // $user->role_id = 4;
        //     $user->update();
        // }
        // return $user;
        $users = User::all();
        return view("dashboard.clients.index", compact("users"));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = User::where('email', request('email'))->orWhere('contact', request('contact'))->first();
        if (!$user) {
            $user = User::create([
                "fname" => ucfirst(request('fname')),
                "lname" => ucfirst(request('lname')),
                "contact" => ucfirst(request('contact')),
                "email" => strtolower(request('email')),
                "idNumber" => strtolower(request('idNumber')),
                "nationality" => request('nationality'),
                "address" => request('address'),
                "role_id" => request('role_id'),
                "isAdmin" => false,
                "pasword" => Hash::make("Password!#@" . date('Y')),
            ]);
        }
    }

    public function show($id)
    {
        $user = User::find($id);
        return view("dashboard.user.user", compact("user"));
    }

    public function edit(string $id)
    {
        //
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        if (request()->fname != null) {
            $user->fname = request()->fname;
        }
        if (request()->mname != null) {
            $user->mname = request()->mname;
        }
        if (request()->sname != null) {
            $user->sname = request()->sname;
        }
        if (request()->contact != null) {
            $user->contact = request()->contact;
        }
        if (request()->email != null) {
            $user->email = request()->email;
        }
        if (request()->nationality != null) {
            $user->nationality = request()->nationality;
        }
        if (request()->gender != null) {
            $user->gender = request()->gender;
        }
        if (request()->idNumber != null) {
            $user->idNumber = request()->idNumber;
        }
        if (request()->town != null) {
            $user->residence = (request()->town) . ', ' . (request()->county);
        }
        if (request()->krapin != null) {
            $user->krapin = request()->krapin;
        }
        if (request()->p_address != null) {
            $user->address = (request()->p_address) . ' ' . (request()->p_code) . ' ' . (request()->p_town);
        }
        if (request()->dob != null) {
            $user->dob = request()->dob;
        }
        if (request()->marital != null) {
            $user->marital = request()->marital;
        }
        if (request()->disability != null) {
            $user->disability = request()->disability;
        }
        if (request()->hasFile('idCard')) {
            $extension = request()->file('idCard')->getClientOriginalExtension();
            $id_path = ($user->fname) . uniqid() . time() . '.' . $extension;
            request()->file('idCard')->storeAs('public/users/idCards', $id_path);
            $user->id_path = $id_path;
        }
        if (request()->hasFile('kraCert')) {
            $extension = request()->file('kraCert')->getClientOriginalExtension();
            $kra_path = ($user->fname) . uniqid() . time() . '.' . $extension;
            request()->file('kraCert')->storeAs('public/users/kraCerts', $kra_path);
            $user->kra_path = $kra_path;
        }
        if (request()->hasFile('passport')) {
            $extension = request()->file('passport')->getClientOriginalExtension();
            $pp_path = ($user->fname) . uniqid() . time() . '.' . $extension;
            request()->file('passport')->storeAs('public/users/passports', $pp_path);
            $user->pp_path = $pp_path;
        }
        if (request()->nok != null) {
            $user->nok = request()->nok;
        }
        if (request()->nokcontact != null) {
            $user->nokcontact = request()->nokcontact;
        }
        if (request()->nokrelationship != null) {
            $user->nokrelationship = request()->nokrelationship;
        }
        if (request()->role_id != null) {
            
            if ((request('role_id') != 3) || (request('role_id') != 4)) {
                $staff = staff::where('user_id', request("user_id"))->first();
                $user->role_id = request('role_id');
                $user->update();
                $user->isAdmin = true;
                if (!$staff) {
                    Staff::create(
                        [
                            "user_id" => $user->id,
                            "bank" => request("bank"),
                            "account" => request("account"),
                            "gross" => request("gross"),
                            "Allowance" => request("Allowance"),
                            "NHIF" => request("NHIF"),
                            "NSSF" => request("NSSF"),
                            "PAYE" => request("PAYE"),
                            "Other" => request("Other")
                        ]
                    );
                    return back()->with("success", "Staff Created successfull.");
                }
            } else {
                $user->isAdmin = false;
            }
        }
        if (request()->password != null) {
            $user->password = request()->password;
        }
        if (request()->id_approved != null) {
            $user->id_approved = request()->id_approved;
        }
        if (request()->kra_approved != null) {
            $user->kra_approved = request()->kra_approved;
        }
        $user->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
