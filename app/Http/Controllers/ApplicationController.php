<?php

namespace App\Http\Controllers;

use App\Models\application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
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
        if(request()->hasFile("cv")){
            $extension = request()->file('cv')->getClientOriginalExtension();
            $cv = uniqid().time(). '.' . $extension;
            request()->file('cv')->storeAs('public/cvs', $cv);
        }
        application::create([
            'vacancy_id'=>request('vacancy_id'),
            'applicant_name'=>request('applicant_name'),
            'applicant_email'=>request('applicant_email'),
            'applicant_contact'=>request('applicant_contact'),
            'cover_letter'=>request('cover_letter'),
            'cv'=>$cv,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $app=application::findOrFail($id);
        if(request('vacancy_id')!=null){
            $app->vacancy_id=request('vacancy_id');
        }
        if(request('applicant_name')!=null){
            $app->applicant_name=request('applicant_name');
        }
        if(request('applicant_email')!=null){
            $app->applicant_email=request('applicant_email');
        }
        if(request('applicant_contact')!=null){
            $app->applicant_contact=request('applicant_contact');
        }
        if(request('cover_letter')!=null){
            $app->cover_letter=request('cover_letter');
        }
        if(request('cv')!=null){
            $app->cv=request('cv');
        }
        if(request('status')!=null){
            $app->status=request('status');
        }
        if(request('message')!=null){
            $app->message=request('message');
        }
        $app->update();
        return back()->with('success','Application updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(application $application)
    {
        //
    }
}
