@extends('layouts.dashboard',['title'=>'Social Amenities'])
@section('dashboard')
<div class="card p-3">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label>Is there any education center near?</label>
                <div>
                    <input type="radio" name="school_yes_no" onchange="showSchool('yes')" value="available" required=""> Yes
                    <input type="radio" name="school_yes_no" onchange="showSchool('no')" value="not available" required=""> No
                </div>
                <div class="" id="school" style="display:none;">
                    <label><b>Specify school</b></label>
                    <div>
                        <label>1</label>
                        <input type="text" name="school_1_name" placeholder="enter school name 1" class="form-control mb-2" value="">
                        <select class="form-control mb-2" name="school_1_level">
                            <option value="">---Select Level---</option>
                            <option value="Pre-school">Pre-school</option>
                            <option value="Primary">Primary</option>
                            <option value="Junior Secondary">Junior Secondary</option>
                            <option value="High School">Secondary / High School</option>
                            <option value="College/Polytechnic/University">University/College/ Polytechnic</option>
                        </select>
                        <input type="text" class="form-control mb-2" name="school_1_distance" placeholder="How Far is it">
                    </div>

                    <div>
                        <label>2</label>
                        <input type="text" style="text-align:center;font-weight:bold;text-transform: uppercase;" value="" name="school_2_name" placeholder="enter school name 2" class="form-control mb-2">

                        <select class="form-control mb-2" name="school_2_level">
                            <option value="">---Select Level---</option>
                            <option value="">---Select Level---</option>
                            <option value="Pre-school">Pre-school</option>
                            <option value="Primary">Primary</option>
                            <option value="Junior Secondary">Junior Secondary</option>
                            <option value="High School">Secondary / High School</option>
                            <option value="College/Polytechnic/University">University/College/ Polytechnic</option>
                        </select>
                        <input type="text" value="" class="form-control mb-2" name="school_2_distance" placeholder="How Far is it">
                    </div>

                    <div>
                        <label>3</label>
                        <input type="text" value="" name="school_3_name" placeholder="enter school name 3" class="form-control mb-2">

                        <select class="form-control mb-2" name="school_3_level">
                            <option>---Select Level---</option>
                            <option value="Pre-school">Pre-school</option>
                            <option value="Primary">Primary</option>
                            <option value="Junior Secondary">Junior Secondary</option>
                            <option value="High School">Secondary / High School</option>
                            <option value="College/Polytechnic/University">University/College/ Polytechnic</option>
                        </select>
                        <input type="text" class="form-control mb-2" name="school_3_distance" value="" placeholder="How Far is it">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label>is there any Police Station/Post or Chief's Camp near?</label>
                <div class="">
                <input type="radio" name="chief" onchange="showSecurity('yes')" value="available" required=""> Yes
                <input type="radio" name="chief" onchange="showSecurity('no')" value="not Available" required=""> No
                </div>
                <div class="" id="security" style="display: none;">
                    <label style="font-weight:bold;">specify</label>
                    <input type="text" name="police_name" class="form-control mb-2" placeholder="Name of police station/ chief's camp" value="" style="font-weight:bold;">
                    <input type="text" class="form-control mb-2" name="police_distance" value="" placeholder="How far is it?" style="font-weight:bold;">
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label> Is there any healthy facility near?</label>
                <div class="">
                <input type="radio" name="hospital" onchange="showHospital('yes')" value="available"> Yes
                <input type="radio" name="hospital" onchange="showHospital('no')" value="not available"> No
                </div>
                <div id="hospital" style="display: none;">
                    <label>Specify hospital</label>
                    <div class="mb-2">
                        <div>
                            <label>1</label>
                            <input type="text" placeholder="Hospital name 1" name="hospital_1_name" value="" class="form-control mb-2" style="text-align:center;font-weight:bold; text-transform:uppercase;">
                            <input type="text" name="hospital_1_distance" class="form-control mb-2" placeholder="How far is it">
                            <select class="form-control mb-2" name="hospital_1_owner">
                                <option value="">Select Type</option>
                                <option value="Hospital ">Hospital </option>
                                <option value="Health Center">Health Center</option>
                                <option value="Dispensary/Clinic">Dispensary/Clinic</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label>2</label>
                        <input type="text" placeholder="Hospital name 2" name="hospital_2_name" value="" class="form-control mb-2">
                        <input type="text" name="hospital_2_distance" class="form-control mb-2" placeholder="How far is it">
                        <select class="form-control mb-2" name="hospital_2_owner">
                            <option value="">Select Type</option>
                            <option value="Hospital ">Hospital </option>
                            <option value="Health Center">Health Center</option>
                            <option value="Dispensary/Clinic">Dispensary/Clinic</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label>3 </label>
                        <input type="text" placeholder="hospital name 3" name="hospital_3_name" value="" class="form-control mb-2">
                        <input type="text" name="hospital_3_distance" class="form-control mb-2" placeholder="How far is it">
                        <select class="form-control mb-2" name="hostipal_3_owner">
                            <option value="">Select Type</option>
                            <option value="Hospital ">Hospital </option>
                            <option value="Health Center">Health Center</option>
                            <option value="Dispensary/Clinic">Dispensary/Clinic</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" style="font-weight:bold;" type="submit" name="submit_social_amenities_submit"><b class="fa fa-check-circle"></b> Save info and proceed <b class="fa fa-angle-right"></b></button>
        </div>
    </form>
</div>
<script>
    function showHospital(val){
        if (val=='yes') {
            document.getElementById('hospital').style.display=''
        }
        else{
            document.getElementById('hospital').style.display='none'
        }
    }
    function showSchool(val){
        if (val=='yes') {
            document.getElementById('school').style.display=''
        }
        else{
            document.getElementById('school').style.display='none'
        }
    }
    function showSecurity(val){
        if (val=='yes') {
            document.getElementById('security').style.display=''
        }
        else{
            document.getElementById('security').style.display='none'
        }
    }
</script>
@endsection