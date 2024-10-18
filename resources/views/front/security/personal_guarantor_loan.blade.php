@extends('layouts.app',['title'=>'Personal Guarantor Loan'])
@section('content')
<!--left-fixed -navigation-->
<div id="page-wrapper">
    <div class="main-page">
        <div class="container" style="padding:1.5em 0px;">
            <div class="row">
                <a href="index.php" style="text-decoration: none; padding-bottom: 10px; padding-top: 10px;">
                    <div> <img src="https://img.icons8.com/?size=100&id=98961&format=png&color=000000" class="size"> </div>
                </a>
                <h4 style="font-weight: bold; font-family: sans-serif; color: blue; font-size: 30px ; padding-top: 20px; padding-bottom:20px ;">
                    <img src='https://img.icons8.com/?size=100&id=yfL0AXCknXk0&format=png&color=000000' style='height: 40px; width: 40px;'>
                    Personal Guarantor Loan.
                </h4>

                <hr>
                <p style="padding-top: 10px;padding-bottom: 10px;color:black;">
                    We appreciate your interest in applying personal guarantor loan with us.You are required to read the terms and conditions first before you provide any personal details. To proceed,please click on either of the Guarantors to fill the required details.
                </p>

                <label style="padding-bottom: 20px;">
                    <input type="checkbox" name="terms" required>
                    I agree to the <a href="terms-and-conditions.php">Terms and Conditions</a>
                </label>
                <ul class="nav nav-tabs" style="padding-top:40px ; ">
                    <li class="nav-item">
                        <a href="loan-security-personal-guarantee.php?token=apply" class="nav-link" style="font-weight: bold;text-transform:uppercase;">
                            <img src="https://img.icons8.com/?size=100&id=jnva0YJ3hNTW&format=png&color=000000" style="height: 25px; font-weight: 25px;">
                            First Guarantor
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="loan-security-personal-guarantee.php?token=history" class="nav-link" style="background: #6699ff;color:black;font-weight: bold; text-transform:uppercase;">
                            <img src="https://img.icons8.com/?size=100&id=jnva0YJ3hNTW&format=png&color=000000" style="height: 25px; font-weight: 25px;">
                            Second Guarantor
                        </a>
                    </li>
                </ul>
                <div class="container">
                    <form action="" method="post" enctype="multipart/form-data" style='border: 1px solid black; border-radius: 20px; padding: 20px;'>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" placeholder=" " name="fname" id="" class="form-control" required>
                                    <label for="">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" placeholder=" " name="mname" id="" class="form-control">
                                    <label for="">Middle Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" placeholder=" " name="sname" id="" class="form-control" required>
                                    <label for="">Surname</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="text" placeholder=" " name="contact" id="" class="form-control" required>
                                    <label for="">Phone Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <select name="occupation" id="" class="form-select" required>
                                        <option value="">--Select Occupation--</option>
                                        <option value="Civil">Civil</option>
                                        <option value="Private">Private</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="None">None</option>
                                    </select>
                                    <label for="">Occupation</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-floating">
                                    <input type="number" name="duration" id="" placeholder=" " class="form-control" required>
                                    <label for="">Duration[years] in this job</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="file" name="idcard" id="" class="form-control" required>
                                        <label for="">ID/Passport photo <i>(For national ID, all parts scanned in one page)</i></label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input type="file" name="slip" id="" class="form-control" required>
                                        <label for="">Latest payslip or transaction statement</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-footer">
                            <button type="submit" name="submit_guarantor_details" class="btn btn-success font-bold" style="font-weight: bold;">
                                <img src='https://img.icons8.com/?size=100&id=51Yhd3SXMooI&format=png&color=000000' style="height: 25px; width: 25px; "></b> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection