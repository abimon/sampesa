@extends('layouts.app',['title'=>'Pay Slip Loan'])
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
                            <li class="active">Payslip Loan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<section>
    <div class="bs-examplwidget-shadow" >
            <form action="{{route('payslip.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row p-3">
                    <div class="col-12 p-2">
                        <h3> Employee's Details.</h3>
                    </div>
                    <hr>
                    <div class="row mb-2 col-md-6" style="padding-top:1em; ">
                        <label class="col-md-4" for="type_of_employment">Type of Employment:</label>
                        <select class="form-control col-md-8" id="type_of_employment" name="type_of_employment" required>
                            <option value="">Category</option>
                            <option value="Permanent">Permanent</option>
                            <option value="Contract">Contract</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" for="employer">Employer:</label>
                        <input type="text" class="form-control col-md-8" name="employer" placeholder="Employer Name">
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" for="job_title">Job Title:</label>
                        <input type="text" class="form-control col-md-8" name="job_title" placeholder="Job Title">
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" for="monthly_salary">Monthly Salary:</label>
                        <input type="number" class="form-control col-md-8" name="monthly_salary" placeholder="E.g. 50000">
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" for="statement">Bank statements(3-6 months):</label>
                        <input type="file" class="form-control col-md-8" name="statement" >
                    </div>
                    <div class="row mb-2 col-md-6">
                        <label class="col-md-4" for="amount">Loan Amount:</label>
                        <input type="number" class="form-control col-md-8" name="amount" placeholder="E.g. 100000">
                    </div>
                </div>
                <div class="modal-footer" style='padding-top: 20;'>
                    <button type="submit" name="submit_capital_loan" value="submit_capital_loan" class="btn btn-primary">Submit and Proceed <b class="fa fa-angle-right"></b></button>
                </div>
            </form>
    </div>
</section>
@endsection