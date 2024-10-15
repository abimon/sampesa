<?php

namespace App\Http\Controllers;

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
}
