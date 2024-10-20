@extends('layouts.app',['title'=>'Personal Guarantor Loan'])
@section('content')
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">

                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/services/credit">Credit Services</a></li>
                            <li class="active">Personal Guarantor Loan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<section class="p-3" onload="dis()">
    <p style="padding-top: 10px;padding-bottom: 10px;color:black;">
        We appreciate your interest in applying personal guarantor loan with us.You are required to read the terms and conditions first before you provide any personal details. To proceed,please click on either of the Guarantors to fill the required details.
    </p>

    <label class="col-md-4" style="padding-bottom: 20px;">
        <input type="checkbox" name="terms" id="tc" required onchange="dis()" value="1">
        I agree to the <a href="/terms-and-conditions">Terms and Conditions</a>
    </label>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="col-md-6 row mb-3">
                <label for="" class="col-md-4">Loan Amount(KShs)</label>
                <input disabled type="number" name="amount" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-6"></div>
            <div style='border: 1px solid black; border-radius: 20px; padding: 20px;'>
                <div class="nav-link" style="font-weight: bold;text-transform:uppercase;">
                    <img src="https://img.icons8.com/?size=100&id=jnva0YJ3hNTW&format=png&color=000000" style="height: 25px; font-weight: 25px;">
                    First Guarantor
                </div>
                <div class="row">
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">First Name</label>
                        <input disabled type="text" placeholder=" " name="fname" id="" class="form-control col-md-8" required>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Middle Name</label>
                        <input disabled type="text" placeholder=" " name="mname" id="" class="form-control col-md-8">
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Surname</label>
                        <input disabled type="text" placeholder=" " name="sname" id="" class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Phone Number</label>
                        <input disabled type="text" placeholder=" " name="contact" id="" class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Occupation</label>
                        <select name="occupation" disabled id="" class="form-control col-md-8" required>
                            <option value="">--Select Occupation--</option>
                            <option value="Civil">Civil</option>
                            <option value="Private">Private</option>
                            <option value="Self Employed">Self Employed</option>
                            <option value="None">None</option>
                        </select>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Duration[years] in this job</label>
                        <input disabled type="number" name="duration" id="" placeholder=" " class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">ID/Passport photo <i>(For national ID, both sides in one page)</i></label>
                        <input disabled type="file" name="idcard" id="" class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Latest payslip or transaction statement</label>
                        <input disabled type="file" name="slip" id="" class="form-control col-md-8" required>
                    </div>
                </div>
            </div>
            <hr>
            <div style='border: 1px solid black; border-radius: 20px; padding: 20px;'>
                <div class="nav-link" style="font-weight: bold;text-transform:uppercase;">
                    <img src="https://img.icons8.com/?size=100&id=jnva0YJ3hNTW&format=png&color=000000" style="height: 25px; font-weight: 25px;">
                    Second Guarantor
                </div>
                <div class="row">
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">First Name</label>
                        <input disabled type="text" placeholder=" " name="fname1" id="" class="form-control col-md-8" required>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Middle Name</label>
                        <input disabled type="text" placeholder=" " name="mname1" id="" class="form-control col-md-8">
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Surname</label>
                        <input disabled type="text" placeholder=" " name="sname1" id="" class="form-control col-md-8" required>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Phone Number</label>
                        <input disabled type="text" placeholder=" " name="contact1" id="" class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Occupation</label>
                        <select name="occupation1" id="" disabled class="form-control col-md-8" required>
                            <option value="">--Select Occupation--</option>
                            <option value="Civil">Civil</option>
                            <option value="Private">Private</option>
                            <option value="Self Employed">Self Employed</option>
                            <option value="None">None</option>
                        </select>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Duration[years] in this job</label>
                        <input disabled type="number" name="duration1" id="" placeholder=" " class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">ID/Passport photo <i>(For national ID, both sides in one page)</i></label>
                        <input disabled type="file" name="idcard1" id="" class="form-control col-md-8" required>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label class="col-md-4" for="">Latest payslip or transaction statement</label>
                        <input disabled type="file" name="slip1" id="" class="form-control col-md-8" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit_guarantor_details" class="btn btn-success font-bold" style="font-weight: bold;">
                        <img src='https://img.icons8.com/?size=100&id=51Yhd3SXMooI&format=png&color=000000' style="height: 25px; width: 25px; "></b> Submit </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function dis() {
            console.log(document.getElementById('tc').value)
            if (document.getElementById('tc').checked == '1') {
                var inputs = document.getElementsByClassName("form-control");
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = '';
                }
                // var selects = document.getElementsByTagName("select");
                // for (var i = 0; i < selects.length; i++) {
                //     selects[i].disabled = '';
                // }
            } else {
                // var inputs = document.getElementsByTagName("input");
                var inputs = document.getElementsByClassName("form-control");
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = 'disabled';
                }
                // var selects = document.getElementsByTagName("select");
                // for (var i = 0; i < selects.length; i++) {
                //     selects[i].disabled = 'disabled';
                // }
            }
        }
    </script>
</section>
@endsection