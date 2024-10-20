@extends('layouts.app',['title'=>'Investor Registration'])
@section('content')
<section>
    <div class="container">
        <h1 class="text-center">Investor Registration</h1>
        <p class="container" style="padding-top:2em;">
            Welcome to the Gateway of Opportunities! Thank you for choosing to embark on an exciting journey in real estate investing. We're thrilled to have you here and provide you with a platform that unlocks a world of potential. By joining our investor community, you're gaining access to a wealth of resources, expert insights, and exclusive investment opportunities that can propel your success in the real estate market. Register now to begin your remarkable investment adventure. Together, let's pave the way to financial prosperity and build a portfolio that stands the test of time. Welcome aboard!"
        </p>
        <div class="thumbnail">
            <form action="/investor/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">First Name</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter First name" name="fname" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Middle Name</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter middle name" name="mname" value="">
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Last/Family Name</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Last Name name" name="sname" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Gender</label>
                        <select class="form-control col-md-8" required name="gender" value="">
                            <option value="">---- Select gender ----</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">ID Number</label>
                        <input type="number" class="form-control col-md-8" placeholder="Enter ID Number" name="idNumber" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Phone Number</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Phone Number" name="phone_number" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Email Adress</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Email Address" name="email" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Nationality</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Nationality" name="nationality" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Postal Adress</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Postal Address" name="address" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Occupation</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Occupation" name="occupation" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Passport Photo</label>
                        <input type="file" class="form-control col-md-8" name="passport" accept=".png,.jpg,.gif,.jpeg,.webp" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Copy Of ID</label>
                        <input type="file" class="form-control col-md-8" name="idCard" accept=".png,.jpg,.gif,.jpeg,.webp," required>
                    </div>
                </div>
                <div class="row">
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Next of Kin Name</label>
                        <input type="text" class="form-control col-md-8" placeholder="Next of Kin Name" name="nKin" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Next of Kin Relationship</label>
                        <input type="text" class="form-control col-md-8" placeholder="Next of Kin Relationship" name="nKin_rel" value="" required>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" style="font-weight:bold;">Next of Kin Phone</label>
                        <input type="text" class="form-control col-md-8" placeholder="Enter Next of Kin Phone" name="nKin_contact" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" style="font-weight:bold;" type="submit" name="submit_investor"><b class="fa fa-save"></b> Submit And Proceed</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection