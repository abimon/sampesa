@extends('layouts.app',['title'=>'Business Capital Loan Application'])
@section('content')
<!--Start breadcrumb area-->
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
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
                            <li class="active">Business Capital Loan Application</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--End breadcrumb area-->
<section>
    <form action="{{route('capital.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row p-3">
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="">Business Name<span style="color: red;">*</span>:</label>
                <input type="text" id="business_name" name="business_name" class="form-control col-md-8" required placeholder="eg Sampesa group" style="text-transform:capitalize;">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="">Business Contact Number<span style="color: red;">*</span>:</label>
                <input type="text" id="contact" name="contact" class="form-control col-md-8" required value="{{Auth()->user()->contact}}">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="">Business Email Address<span style="color: red;">*</span>:</label>
                <input type="text" id="email" name="email" class="form-control col-md-8" required value="{{Auth()->user()->email}}">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="">Business Address<span style="color: red;">*</span>:</label>
                <input type="text" id="business_address" name="business_address" class="form-control col-md-8" required placeholder="eg 100 gtc ">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_year">Type of Business<span style="color: red;">*</span>:</label>
                <select class="form-control col-md-8" value="" id="type_of_business" name="type_of_business" required>
                    <option value="">---- Select ----</option>
                    <option value="Private Limited Company">Private Limited Company</option>
                    <option value="Public Limited Company">Public Limited Company</option>
                    <option value="Company Limited by Guarantee.">Company Limited by Guarantee.</option>
                    <option value="Limited Liability Partnership">Limited Liability Partnership</option>
                    <option value="Limited Partnership">Limited Partnership</option>
                    <option value="Foreign Company">Foreign Company</option>
                </select>
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Business Registration Number<span style="color: red;">*</span>:</label>
                <input type="text" id="reg_no" name="reg_no" class="form-control col-md-8" required placeholder="e.g Sampesa">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Business Licence Number:</label>
                <input type="text" id="licence_no" name="licence_no" class="form-control col-md-8" required placeholder="e.g Sampesa">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Number of Years in Operation:</label>
                <input type="text" id="operational_years" name="operational_years" class="form-control col-md-8" required placeholder="e.g 10">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Annual Revenue:</label>
                <input type="number" id="revenue" name="revenue" class="form-control col-md-8" required placeholder="e.g ksh 1000000">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Amount Requested:</label>
                <input type="number" id="amount" name="amount" class="form-control col-md-8" required placeholder="e.g 1000">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Purpose of Loan:</label>
                <input type="text" id="purpose" name="purpose" class="form-control col-md-8" required placeholder="e.g Business fundin">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Preferred Loan Term:</label>
                <select class="form-control col-md-8" id="term" name="term" required>
                    <option value="">---- Select ----</option>
                    <option value="long">Long</option>
                    <option value="short">Short</option>
                </select>
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="car_mileage">Preferred Repayment Schedule:</label>
                <input type="text" id="repayment_schedule" name="repayment_schedule" class="form-control col-md-8" required placeholder="e.g short">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Upload Business licence <span style="color: red;">*</span> :</label>
                <input type="file" class="form-control col-md-8" name="business_no" required>
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Business KRA Pin <span style="color: red;">*</span>:</label>
                <input type="file" class="form-control col-md-8" name="kra_pin" required>
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="procure">Do you wish to procure securities with Us</label>
                <select class="form-control col-md-8" value="" id="procure" name="procure" required>
                    <option selected disabled>---- Select ----</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Upload Title deed:</label>
                <input type="file" class="form-control col-md-8" name="title_deed">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Upload Bank guarantees :</label>
                <input type="file" class="form-control col-md-8" name="bank_guarantee">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Upload Fixed deposit guarantees :</label>
                <input type="file" class="form-control col-md-8" name="fixed_deposit">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Upload Vehicle logbooks. :</label>
                <input type="file" class="form-control col-md-8" name="logbook">
            </div>
            <div class="row col-md-6 mb-2">
                <label class="col-md-4" for="business_licence">Additional Documents(Licences) :</label>
                <input type="file" class="form-control col-md-8" name="files[]" multiple>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submit_capital_loan" class="btn btn-primary">Submit and Proceed <b class="fa fa-angle-right"></b> </button>
        </div>
    </form>
</section>
@endsection