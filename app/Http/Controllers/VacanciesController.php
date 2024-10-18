<?php

namespace App\Http\Controllers;

use App\Models\roles;
use App\Models\vacancies;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = vacancies::all();
        $roles = roles::where('id','>',4)->get();
        return view("dashboard.hresource.jobs", compact("vacancies","roles"));
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
        vacancies::create([
            'role_id'=>request('role_id'),
            'openings'=>request('openings'),
            'deadline'=>request('deadline'),
            'app_mode'=>request('app_mode'),
            'status'=>'Open'
        ]);
        return back()->with('success','Job advert created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(vacancies $vacancies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vacancies $vacancies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vacancies $vacancies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vacancies $vacancies)
    {
        //
    }
}
