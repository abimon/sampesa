@extends('layouts.app',['title'=>'Personal Deposit Loan'])
@section('content')
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Sampesa Group Limited</span>
                        <h1>Personal Deposit Loan</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/services/credit">Credit Services</a></li>
                            <li class="active">Personal Deposit Loan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<section>
    <div class="container">
        <p>A personal deposit loan is a type of loan where you can use your own funds held in a deposit account as collateral. We are excited to offer you this opportunity with our personal deposit loan product.
        </p>
        <p class="">
            Use your own funds as collateral and qualify for up to 5 times your initial shares. For example, with a deposit of 10,000 KES, you can qualify for a loan amount of up to 50,000 KES. Leverage your savings for competitive interest rates and flexible repayment options. Fill out the form below to explore this opportunity and our team will assist you in processing your loan application. Achieve your financial goals with our personal deposit loan.
        </p>
        <!-- <h4 style="margin:1.5em 1px;opacity:0.6;">Please take the below steps to proceed</h4> -->
        <div style="margin:1.5em 1px;">
            <div class="p-3">
                <div style="font-weight: bolder;">
                    <div>
                        <p>Your Account Balance is <b style="font-size:100%;" class="badge badge-primary"></b>
                        
                        </p>
                    </div>

                    <div>
                        <p>You Qualify for upto <u> Kshs </u> payable within 24 months at a flat interest rate of <u>5% per month</u></p>
                        <div class="p-3 text-center">
                            <a href="/loan/apply/personal_deposit" class="btn btn-primary" style="font-weight:bold;">Apply Loan Now <b class="fa fa-angle-right"></b> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center">
                            <a href="#" data-toggle="modal" data-target="#deposit-modal" class="btn btn-success"><b class="fa fa-cloud-upload"></b> Make a Deposit </a>
                        </div>
        </div>

        <div class="modal fade" id="deposit-modal" tabindex="1" aria-labelledby="StaffLabel" aria-hidden="true" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="StaffLabel">Make Deposit to Proceed</h3>
                        <button type="button" class="fa fa-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="amount" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Pay</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection