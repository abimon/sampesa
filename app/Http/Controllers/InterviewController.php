<?php

namespace App\Http\Controllers;

use App\Models\application;
use App\Models\interview;
use App\Models\vacancies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interviews = interview::all();
        return view("dashboard.hresource.interviews", compact("interviews"));
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
        interview::create([
            "appication_id"=>request('job_id'),
            "date"=>request('date'),
            "mode"=>request('mode'),
            'venue'=>request('venue'),
            'details'=>request('details'),
            'status'=>"Scheduled"
        ]);
        $application= application::findOrFail(request('job_id'));
        $application->status=request('Interview');
        $application->update();
        $data = [
            'header'=>'Interview Invitation',
            'mess'=>'You have been invited for the interview on '.request('date').'. The '.request('mode').' venue will be '.request('venue').' Remember to '.request('details').' Thank you'
        ];
        $user = [
            'name' => $application->applicant_name,
            'email' => $application->applicant_email,
            'position'=>(vacancies::findOrFail($application->vacancy_id)->role->title)
        ];
        Mail::send(
            'mail.message',
            $data,
            function ($message) use ($user) {
                $message->to($user['email'], $user['name'])->subject(strtoupper($user['position'].' Job Interview'));
            }
        );
        return back()->with('success','Interview is scheduled successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $int=interview::findOrFail($id);
        if(request('message')!=null){
            application::where('id', $int->appication_id)->update([
                'message'=>request('message')
            ]);
        }
        if(request('status')!=null){
            application::where('id', $int->appication_id)->update([
                'status'=>request('status')
            ]);
            $int->status=request('status');
        }
        if (request('status') != null && request('message') != null) {
            $application=application::findOrFail($int->appication_id);
            $data = [
                'header'=>'Interview Feedback',
                'mess'=>'Hello, <br> Your application was '.request('status').'. <br>'.request('message').'<br> Thank you.'
            ];
            $user = [
                'name' => $application->applicant_name,
                'email' => $application->applicant_email,
                'position'=>(vacancies::findOrFail($application->vacancy_id)->role->title)
            ];
            Mail::send(
                'mail.message',
                $data,
                function ($message) use ($user) {
                    $message->to($user['email'], $user['name'])->subject(strtoupper($user['position'].' Job Interview Feedback'));
                }
            );
        }
        return back()->with('success','Feedback recorded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(interview $interview)
    {
        //
    }
}
