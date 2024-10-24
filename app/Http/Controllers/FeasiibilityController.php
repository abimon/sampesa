<?php

namespace App\Http\Controllers;

use App\Models\Feasiibility;
use Illuminate\Http\Request;

class FeasiibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=request("id");
        $project = Feasiibility::where('project_id', $id)->first();
        return view('dashboard.gis.step1_status',compact('id','project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // dd(request());
        $arrears_evidence='';
        $encumbrance_evidence='';
        $loan_statement = '';
        if(request()->hasFile('arrears_evidence')){
            $extension = request()->file('arrears_evidence')->getClientOriginalExtension();
            $arrears_evidence = 'pae'.time(). '.' . $extension;
            request()->file('idCard')->storeAs('public/project/report', $arrears_evidence);
        }
        if(request()->hasFile('encumbrance_evidence')){
            $extension = request()->file('encumbrance_evidence')->getClientOriginalExtension();
            $encumbrance_evidence = 'pee'.time(). '.' . $extension;
            request()->file('idCard')->storeAs('public/project/report', $encumbrance_evidence);
        }
        if(request()->hasFile('loan_statement')){
            $extension = request()->file('loan_statement')->getClientOriginalExtension();
            $loan_statement = 'ls'.time(). '.' . $extension;
            request()->file('idCard')->storeAs('public/project/report', $loan_statement);
        }
        Feasiibility::create([
            "project_id"=>request("project_id"),
            "common_area_name"=>request("common_area_name"),
            "county"=>request("county"),
            "sub_county"=>request("sub_county"),
            "ward"=>request("ward"),
            "nearest_town"=>request("nearest_town"),
            "plot_no"=>request("plot_no"),
            "dimensions"=>request("dimensions"),
            "soil_type"=>request("soil_type"),
            "area_value"=>request("area_value"),
            "tax_status"=>request("tax_status"),
            "arrears_years_from"=>request("arrears_years_from"),
            "arrears_years_to"=>request("arrears_years_to"),
            "arrears_evidence"=>$arrears_evidence,
            "encumbrance"=>request("encumbrance"),
            "encumbrance_type"=>request("encumbrance_type"),
            "encumbrance_evidence"=>$encumbrance_evidence,
            "any_loans"=>request("any_loans"),
            "loan_statement"=>$loan_statement,
            "any_lease"=>request("any_lease"),
            "lease_period"=>request("lease_period"),
            "obstruction"=>request("obstruction"),
        ]);
        return back()->with("success","Basic details recorded successifully.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feasiibility $feasiibility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $project=Feasiibility::where('project_id',$id)->first();
        if(request("project_id")!=null){
            $project->project_id=request("project_id");
        }
        if(request("common_area_name")!=null){
            $project->common_area_name=request("common_area_name");
        }
        if(request("county")!=null){
            $project->county=request("county");
        }
        if(request("sub_county")!=null){
            $project->sub_county=request("sub_county");
        }
        if(request("ward")!=null){
            $project->ward=request("ward");
        }
        if(request("nearest_town")!=null){
            $project->nearest_town=request("nearest_town");
        }
        if(request("plot_no")!=null){
            $project->plot_no=request("plot_no");
        }
        if(request("dimensions")!=null){
            $project->dimensions=request("dimensions");
        }
        if(request("soil_type")!=null){
            $project->soil_type=request("soil_type");
        }
        if(request("area_value")!=null){
            $project->area_value=request("area_value");
        }
        if(request("tax_status")!=null){
            $project->tax_status=request("tax_status");
        }
        if(request("arrears_years_from")!=null){
            $project->arrears_years_from=request("arrears_years_from");
        }
        if(request("arrears_years_to")!=null){
            $project->arrears_years_to=request("arrears_years_to");
        }
        if(request()->hasFile('arrears_evidence')){
            $extension = request()->file('arrears_evidence')->getClientOriginalExtension();
            $arrears_evidence = 'pae'.time(). '.' . $extension;
            request()->file('arrears_evidence')->storeAs('public/project/report', $arrears_evidence);
            $project->arrears_evidence=$arrears_evidence;
        }
        if(request()->hasFile('encumbrance_evidence')){
            $extension = request()->file('encumbrance_evidence')->getClientOriginalExtension();
            $encumbrance_evidence = 'pee'.time(). '.' . $extension;
            request()->file('encumbrance_evidence')->storeAs('public/project/report', $encumbrance_evidence);
            $project->encumbrance_evidence=$encumbrance_evidence;
        }
        if(request()->hasFile('loan_statement')){
            $extension = request()->file('loan_statement')->getClientOriginalExtension();
            $loan_statement = 'ls'.time(). '.' . $extension;
            request()->file('loan_statement')->storeAs('public/project/report', $loan_statement);
            $project->loan_statement=$loan_statement;
        }
        if(request("encumbrance")!=null){
            $project->encumbrance=request("encumbrance");
        }
        if(request("encumbrance_type")!=null){
            $project->encumbrance_type=request("encumbrance_type");
        }
        if(request("any_loans")!=null){
            $project->any_loans=request("any_loans");
        }
        if(request("any_lease")!=null){
            $project->any_lease=request("any_lease");
        }
        if(request("lease_period")!=null){
            $project->lease_period=request("lease_period");
        }
        if(request("obstruction")!=null){
            $project->obstruction=request("obstruction");
        }
        $project->update();
        return back()->with("success","Details updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Feasiibility::destroy($id);
        return back()->with("success","Details deleted successfully.");
    }
}
