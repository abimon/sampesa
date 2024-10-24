@extends('layouts.dashboard',['title'=>'Ownership Status'])
@section('dashboard')
<div class="d-flex justify-content-between mb-2">
    <a href="{{route('status.index',['id'=>$id])}}">
        <button class='btn btn-outline-primary'><i class="fa fa-arrow-left"></i> Back(Step 1)</button>
    </a>
    <a href="{{route('current_development.index',['id'=>$id])}}">
        <button class='btn btn-outline-primary'>
            Next Phase(Current Development) 
            <i class="fa fa-arrow-right"></i>
        </button>
    </a>
</div>
<div class="card p-3">
    <form action="{{route('ownership.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card p-3">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label class="">What document proves you own this property</label>
                    <select name="doc_type" id="" class="form-control">
                        <option value="Title Deed"> Title Deed</option>
                        <option value="Certificate Of Title"> Certificate of Title</option>
                        <option value="Share Certificate"> Share Certificate</option>
                        <option value="Certificate of Lease"> Lease Certificate</option>
                        <option value="Allotment Letter"> Allotment Letter</option>
                        <option value="Certificate of Lease"> Certificate of Lease</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="">Enter Holders Name</label>
                    <input type="text" value="" class="form-control" name="holder_name" placeholder="enter name as written in the above document">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="">Enter LR/Plot Number</label>
                    <input type="text" value="" class="form-control" name="number" placeholder="Enter LR / Plot Number">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="">Upload a copy of the document</label>
                    <input type="file" class="form-control" required name="doc_file">
                </div>
                <div class="col-md-6 mb-2">
                    <label class="">How do you own this property</label>
                    <select class="form-control" name="means" required="">
                        <option value="">------- Select -------</option>
                        <option value="Sole Ownership">Sole Ownership</option>
                        <option value="Joint Ownership">Joint Ownership</option>
                        <option value="Government Owned">Government Owned</option>
                        <option value="Community Project">Community Property</option>
                        <option value="Corporation Ownership">Corporation Ownership</option>
                        <option value="Trust Ownership">Trust Ownership</option>
                        <option value="Inheritance">Inheritance</option>
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label class="">Has any recent land search been done<i>(in the last 6 months)</i></label>
                    <div class="">
                        <input type="radio" name="land_search" value="yes"> Yes <br>
                        <input type="radio" name="land_search" value="no"> No <br>
                    </div>
                    <div class="" id="landsearch_ev" style="display: none;">
                        <label class="">Attach Evidence</label>
                        <input type="file" name="land_search_evdnc" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 mb-2 row" style="margin-top:30px;">
                    <label class=" col-md-6">Upload a copy of Ground Survey Map <br><i>(From Survey of Kenya)</i> </label>
                    <input type="file" name="survey_map" class="form-control col-md-6">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" style="font-weight:bold;">Save and Proceed</button>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function() {
        $("input[name='land_search']").change(function() {
            if ($(this).val() == "yes") {
                $("#landsearch_ev").show();
            } else {
                $("#landsearch_ev").hide();
            }
        });
    });

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