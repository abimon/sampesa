<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = Application::all();
        return view("dashboard.hresource.applications", compact("applications"));
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

        if (request()->hasFile("cv")) {
            $extension = request()->file('cv')->getClientOriginalExtension();
            $cv = uniqid() . time() . '.' . $extension;
            request()->file('cv')->storeAs('public/cvs', $cv);
        }
        application::create([
            'vacancy_id' => request('job_id'),
            'applicant_name' => request('fname'),
            'applicant_email' => request('email'),
            'applicant_contact' => request('contact'),
            'cover_letter' => request('cover_letter'),
            'nationality' => request('nationality'),
            'address' => request('p_address') . '-' . request('p_code') . ' ' . request('p_town'),
            'residence' => request('county') . ', ' . request('town'),
            'cv' => $cv,
            'message'=>'Your application has been received successfully and will be under review. We will get back to you the soonest possible. Thank you.',
            'status'=>'Review'
        ]);
        $data = [
            'header'=>'Successful Application',
            'mess'=>'Your application has been received successfully and will be under review. We will get back to you the soonest possible. Thank you.'
        ];
        $user = [
            'name' => request('fname'),
            'email' => request('email'),
            'position'=>(vacancies::findOrFail(request('job_id'))->role->title)
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject(strtoupper($user['position'].' Job Application'));
            }
        );
        return redirect('/career')->with('success', 'Your application has been submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $app = application::findOrFail($id);
        return view('dashboard.hresource.application', compact('app'));
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
