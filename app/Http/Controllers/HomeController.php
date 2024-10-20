<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\vacancies;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
    public function career(){
        $jobs=vacancies::where([['deadline','>=',date('Y-m-d')]])->orderBy('created_at','desc')->get();
        return view('front.career',compact('jobs'));
    }
    public function apply($id){
        $job=vacancies::findOrFail($id);
        return view('front.application',compact('job'));
    }
    public function services($service){
        if($service=='credit'){
            return view('front.services.credit');
        }
        return view('front.services.'.$service);
    }
    public function loan_details($title){
        return view('front.loans.'.$title);
    }
    public function loan_application($title){
        return view('front.security.'.$title);
    }
}
