@extends('layouts.dashboard',['title'=>'Feasibility Study'])
@section('dashboard')
<div class="d-flex justify-content-between mb-2">
    <a href="{{route('gis.index',['id'=>$id])}}">
        <button class='btn btn-outline-primary'><i class="fa fa-arrow-left"></i> Home</button>
    </a>
    <a href="{{route('ownership.index',['id'=>$id])}}">
        <button class='btn btn-outline-primary'>Next Phase(Ownership Status) <i class="fa fa-arrow-right"></i></button>
    </a>
</div>
<div onload="getLocation()" class="card p-3">
    @if ($project)
    <form action="{{route('status.update',$project->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="common_area_name">Common Area Name:</label>
                <input type="text" class="form-control col-md-8" id="common_area_name" value="{{$project->common_area_name}}" name="common_area_name" required>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="county">County:</label>
                <input type="text" value="{{$project->county}}" name="county" id="" class="form-control col-md-8">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4">Sub-county / Constituency</label>
                <input type="text" name="sub_county" value="{{$project->sub_county}}" class="form-control col-md-8">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4">Ward / Sublocation</label>
                <input type="text" value="{{$project->ward}}" name="ward" id="" class="form-control col-md-8">
            </div>

            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="nearest_town">Nearest Town:</label>
                <input type="text" class="form-control col-md-8" id="nearest_town" value="{{$project->nearest_town}}" name="nearest_town" required>
                <!-- <div class="col-md-12 row mb-2">
                    <input type="hidden" id="latitude" class="form-control col-md-8" placeholder="Turn On Your Location To Get Latitude" rows="1" required="" name="latitude" value="1">
                    <input type="hidden" id="longitude" class="form-control col-md-8" placeholder="Turn On Your Location To Get Longitude" rows="1" required="" name="longitude" value="1">
                </div> -->
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="plot_no">Plot No</label>
                <input type="text" class="form-control col-md-8" id="plot_no" value="{{$project->plot_no}}" name="plot_no" required>
            </div>
            <div class="col-md-6 row mb-2" style="margin-bottom:20px;">
                <label class="col-md-4" for="dimensions">Plot Area (In Ha) </label>
                <input type="double" class="form-control col-md-8" id="dimensions" name="dimensions" required value="{{$project->dimensions}}">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="soil_type">Soil Type:</label>
                <select class="form-control col-md-8" name="soil_type" required="">
                    <option value="">------- Select -------</option>
                    <option {{$project->soil_type=='Black Cotton'?'selected':''}} value="Black Cotton">Black Cotton</option>
                    <option {{$project->soil_type=='Red Soil'?'selected':''}} value="Red Soil">Red Soil</option>
                    <option {{$project->soil_type=='Sand'?'selected':''}} value="Sand">Sand</option>
                    <option {{$project->soil_type=='Silt'?'selected':''}} value="Silt">Silt</option>
                    <option {{$project->soil_type=='Clay'?'selected':''}} value="Clay">Clay</option>
                    <option {{$project->soil_type=='Loam'?'selected':''}} value="Loam">Loam</option>
                    <option {{$project->soil_type=='Peat'?'selected':''}} value="Peat">Peat</option>
                    <option {{$project->soil_type=='Gravel'?'selected':''}} value="Gravel">Gravel</option>
                    <option {{$project->soil_type=='Chalk'?'selected':''}} value="Chalk">Chalk</option>
                    <option {{$project->soil_type=='Limestone'?'selected':''}} value="Limestone">Limestone</option>
                    <option {{$project->soil_type=='Sandstone'?'selected':''}} value="Sandstone">Sandstone</option>
                    <option {{$project->soil_type=='Shale'?'selected':''}} value="Shale">Shale</option>
                </select>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="area_value">Area Value (in KSH):</label>
                <input type="number" class="form-control col-md-8" id="area_value" name="area_value" min="1" required value="{{$project->area_value}}">
            </div>
            <!--start land rates---->
            <div class="col-md-6 row mb-2">
                <label class="col-md-12" for="tax_status"><b class="fa fa-angle-down"></b> Land Rates and Taxes (Only For Lease Hold):</label>
                <div class="col-md-12">
                    <input type="radio" {{$project->tax_status=='cleared'?'checked':''}} name="tax_status" value="cleared" required> &nbsp;&nbsp;Cleared
                    <input type="radio" {{$project->tax_status=='in_arrears'?'checked':''}} name="tax_status" value="in_arrears"> &nbsp;&nbsp;In Arrears<br>
                </div>
                <div class="col-md-6 row mb-2" id="arrears_years" style="display:none; background: rgba(0,0,0,0.1);">
                    <label class="col-md-4" for="arrears_years" style="margin:10px;">Select Arrears Years:</label>
                    <div class="row col-md-8">
                        <div class="col-md-6 row mb-2">
                            <div class="input-group">
                                <label class="col-md-4" class="input-group-addon">from date</label>
                                <input type="date" value="{{$project->arrears_yes_from}}" class="form-control col-md-8" id="arrears_years_from" name="arrears_years_from">
                            </div>
                        </div>
                        <div class="col-md-6 row mb-2 col-md-6">
                            <div class="input-group">
                                <label class="col-md-4" class="input-group-addon">to date</label>
                                <input type="date" class="form-control col-md-8" id="arrears_years_to" value="{{$project->arrears_years_to}}" name="arrears_years_to">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 row mb-2" id="arrears_evidence" style="display:none; background: rgba(0,0,0,0.1);padding:20px;">
                    <label class="col-md-4" for="arrears_years" style="margin:10px;">Upload Evidence:</label>
                    <input type="file" class="form-control" name="arrears_evidence">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-12"><b class="fa fa-angle-down"></b> Is there any encumbrance attached to the property</b></label>
                <div class="col-md-12">
                    <input type="radio" id="encumbrance_yes" {{$project->encumbrance=='yes'?'checked':''}} name="encumbrance" value="yes" onchange="showEncumbranceOptions()">&nbsp;&nbsp; Yes
                    <input type="radio" {{$project->encumbrance=='none'?'checked':''}} id="encumbrance_no" name="encumbrance" value="none" onchange="showEncumbranceOptions()">&nbsp;&nbsp; No
                </div>
                <div class="col-md-12 row" id="encumbrance_options" style="display:none;">
                    <label class="col-md-12" for="encumbrance_type">Encumbrance Type:</label>
                    <select id="encumbrance_type" name="encumbrance_type" class="form-control col-md-8">
                        <option {{$project->encumrance_type=='caveat'?'selected':''}} value="caveat">Caveat</option>
                        <option {{$project->encumrance_type=='disputes'?'selected':''}} value="disputes">Disputes</option>
                        <option {{$project->encumrance_type=='succession'?'selected':''}} value="succession">Succession</option>
                        <option {{$project->encumrance_type=='othere'?'selected':''}} value="others">Others (describe)</option>
                    </select>
                    <div class="row col-md-12 p-2 mb-2">
                        <label class="col-md-11" for="encumbrance_evidence">Encumbrance Evidence:</label><br>
                        <input type="file" id="input-file-now-custom-2" name="encumbrance_evidence" class="form-control col-md-11" />
                    </div>
                </div>

            </div>

            <div class="col-md-6 mb-2 p-2">
                <label >Does The Property Have Any Loans On It</label>

                <div>
                    <input type="radio" name="any_loans" {{$project->any_loans=='Yes'?'checked':''}} onchange="showLoan(this.value)" value="Yes">&nbsp;&nbsp;Yes
                    <input type="radio" name="any_loans" {{$project->any_loans=='No'?'checked':''}} onchange="showLoan(this.value)" value="No">&nbsp;&nbsp;No
                </div>
                <div class="col-md-12 row mb-2 p-2" id="loan_statement" style="display:none;">
                    <label class="col-md-12" for="">Upload Loan Repayment Statement:</label>
                    <input type="file" class="form-control col-md-12" name="loan_statement">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-11">Is The Property On Lease</label>
                <select id="lease" onchange="toggleDiv2()" name="any_lease" required class="form-control col-md-11">
                    <option value="">---select option---</option>
                    <option {{$project->any_lease=='Yes'?'selected':''}} value="Yes">Yes</option>
                    <option {{$project->any_lease=='No'?'selected':''}} value="No">No</option>
                </select>
                <div class="col-md-12 row mb-2" id="lease_years" style="display:none;">
                    <label class="col-md-12" for="" style="margin:10px;">Years Remaining For Lease To End:</label>
                    <input type="text" class="form-control col-md-12" name="lease_period" value="{{$project->lease_period}}">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-12">Does The Property Have Any Obstructions</label>
                <textarea rows='5' id="obstruction" name="obstruction" required class="form-control col-md-11">{{$project->obstruction}}</textarea>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" name="submit_property_status" class="btn btn-success font-bold" style="font-weight: bold;"><b class="fa fa-save"></b> Update & Proceed <b class="fa fa-angle-right"></b></button>
        </div>
    </form>
    @else
    <form action="{{route('status.store',['project_id'=>$id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="common_area_name">Common Area Name:</label>
                <input type="text" class="form-control col-md-8" id="common_area_name" placeholder="How local people call the area" name="common_area_name" required>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="county">County:</label>
                <input type="text" name="county" id="" class="form-control col-md-8">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4">Sub-county / Constituency</label>
                <input type="text" name="sub_county" class="form-control col-md-8">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4">Ward / Sublocation</label>
                <input type="text" name="ward" id="" class="form-control col-md-8">
            </div>

            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="nearest_town">Nearest Town:</label>
                <input type="text" class="form-control col-md-8" id="nearest_town" placeholder="Nearest known center" name="nearest_town" required>
                <!-- <div class="col-md-12 row mb-2">
                    <input type="hidden" id="latitude" class="form-control col-md-8" placeholder="Turn On Your Location To Get Latitude" rows="1" required="" name="latitude" value="1">
                    <input type="hidden" id="longitude" class="form-control col-md-8" placeholder="Turn On Your Location To Get Longitude" rows="1" required="" name="longitude" value="1">
                </div> -->
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="plot_no">Plot No</label>
                <input type="text" class="form-control col-md-8" id="plot_no" placeholder="Plot Number" name="plot_no" required>
            </div>
            <div class="col-md-6 row mb-2" style="margin-bottom:20px;">
                <label class="col-md-4" for="dimensions">Plot Area (In Ha) </label>
                <input type="double" class="form-control col-md-8" id="dimensions" name="dimensions" required placeholder="Plot Area In Hectares">
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="soil_type">Soil Type:</label>
                <select class="form-control col-md-8" name="soil_type" required="">
                    <option value="">------- Select -------</option>
                    <option value="Black Cotton">Black Cotton</option>
                    <option value="Red Soil">Red Soil</option>
                    <option value="Sand">Sand</option>
                    <option value="Silt">Silt</option>
                    <option value="Clay">Clay</option>
                    <option value="Loam">Loam</option>
                    <option value="Peat">Peat</option>
                    <option value="Gravel">Gravel</option>
                    <option value="Chalk">Chalk</option>
                    <option value="Limestone">Limestone</option>
                    <option value="Sandstone">Sandstone</option>
                    <option value="Shale">Shale</option>
                </select>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-4" for="area_value">Area Value (in KSH):</label>
                <input type="number" class="form-control col-md-8" id="area_value" name="area_value" min="1" required placeholder="Min Value 0">
            </div>
            <!--start land rates---->
            <div class="col-md-6 row mb-2">
                <label class="col-md-12" for="tax_status"><b class="fa fa-angle-down"></b> Land Rates and Taxes (Only For Lease Hold):</label>
                <div class="col-md-12">
                    <input type="radio" name="tax_status" value="cleared" required> &nbsp;&nbsp;Cleared<br>
                    <input type="radio" name="tax_status" value="in_arrears"> &nbsp;&nbsp;In Arrears<br>
                </div>
                <div class="col-md-6 row mb-2" id="arrears_years" style="display:none; background: rgba(0,0,0,0.1);">
                    <label class="col-md-4" for="arrears_years" style="margin:10px;">Select Arrears Years:</label>
                    <div class="row col-md-8">
                        <div class="col-md-6 row mb-2">
                            <div class="input-group">
                                <label class="col-md-4" class="input-group-addon">from date</label>
                                <input type="date" class="form-control col-md-8" id="arrears_years_from" name="arrears_years_from">
                            </div>
                        </div>
                        <div class="col-md-6 row mb-2 col-md-6">
                            <div class="input-group">
                                <label class="col-md-4" class="input-group-addon">to date</label>
                                <input type="date" class="form-control col-md-8" id="arrears_years_to" name="arrears_years_to">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 row mb-2" id="arrears_evidence" style="display:none; background: rgba(0,0,0,0.1);padding:20px;">
                    <label class="col-md-4" for="arrears_years" style="margin:10px;">Upload Evidence:</label>
                    <input type="file" class="form-control" name="arrears_evidence">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-12"><b class="fa fa-angle-down"></b> Is there any encumbrance attached to the property</b></label>
                <div class="col-md-12">
                    <input type="radio" id="encumbrance_yes" name="encumbrance" value="yes" onchange="showEncumbranceOptions()">&nbsp;&nbsp; Yes<br>
                    <input type="radio" id="encumbrance_no" name="encumbrance" value="none" onchange="showEncumbranceOptions()">&nbsp;&nbsp; No
                </div>
                <div class="col-md-12 row" id="encumbrance_options" style="display:none;">
                    <label class="col-md-12" for="encumbrance_type">Encumbrance Type:</label><br>
                    <select id="encumbrance_type" name="encumbrance_type" class="form-control col-md-8">
                        <option value="caveat">Caveat</option>
                        <option value="disputes">Disputes</option>
                        <option value="succession">Succession</option>
                        <option value="others">Others (describe)</option>
                    </select>
                    <div class="row col-md-12 p-2 mb-2">
                        <label class="col-md-11" for="encumbrance_evidence">Encumbrance Evidence:</label><br>
                        <input type="file" id="input-file-now-custom-2" name="encumbrance_evidence" class="form-control col-md-11" />
                    </div>
                </div>

            </div>

            <div class="col-md-6 row mb-2 p-2">
                <label class="col-md-11">Does The Property Have Any Loans On It</label>
                <select id="loans" name="any_loans" onchange="toggleDiv()" required class="form-control col-md-11">
                    <option>---select option---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <div class="col-md-12 row mb-2 p-2" id="loan_statement" style="display:none;">
                    <label class="col-md-12" for="">Upload Loan Repayment Statement:</label>
                    <input type="file" class="form-control col-md-12" name="loan_statement">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-11">Is The Property On Lease</label>
                <select id="lease" onchange="toggleDiv2()" name="any_lease" required class="form-control col-md-11">
                    <option value="">---select option---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <div class="col-md-12 row mb-2" id="lease_years" style="display:none;">
                    <label class="col-md-12" for="" style="margin:10px;">Years Remaining For Lease To End:</label>
                    <input type="text" class="form-control col-md-12" name="lease_period" placeholder="Years Remaining">
                </div>
            </div>
            <div class="col-md-6 row mb-2">
                <label class="col-md-12">Does The Property Have Any Obstructions</label>
                <textarea rows='5' id="obstruction" name="obstruction" required class="form-control col-md-11" placeholder='Describe, i.e Graves, Power line, Septic Tank, Water ETC.'></textarea>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" name="submit_property_status" class="btn btn-success font-bold" style="font-weight: bold;"><b class="fa fa-save"></b>Save & Proceed <b class="fa fa-angle-right"></b></button>
        </div>
    </form>
    @endif
</div>
<script src="{{asset('storage/dash/js/locations.js')}}"></script>
<script src="{{asset('storage/dash/js/locations.js?v=1.0')}}"></script>
<script>
    function toggleDiv() {
        var selectElement = document.getElementById("loans");
        var hiddenDiv = document.getElementById("loan_statement");

        if (selectElement.value === "Yes") {
            hiddenDiv.style.display = "block";
        } else {
            hiddenDiv.style.display = "none";
        }
    }

    function toggleDiv2() {
        var selectElement = document.getElementById("lease");
        var hiddenDiv = document.getElementById("lease_years");

        if (selectElement.value === "Yes") {
            hiddenDiv.style.display = "block";
        } else {
            hiddenDiv.style.display = "none";
        }
    }

    function showLoan(val) {
        var hiddenDiv = document.getElementById("loan_statement");
        console.log(val)
        if (val == "Yes") {
            hiddenDiv.style.display = "";
        } else {
            hiddenDiv.style.display = "none";
        }
    }

    function showEncumbranceOptions() {
        var encumbranceRadio = document.getElementById("encumbrance_yes");
        var encumbranceOptions = document.getElementById("encumbrance_options");

        if (encumbranceRadio.checked) {
            encumbranceOptions.style.display = "block";
        } else {
            encumbranceOptions.style.display = "none";
        }
    }
</script>
@endsection