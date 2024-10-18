@extends('layouts.app',['title'=>'Credit Services'])
@section('content')
<?php $img =asset("storage/front/images/resources/breadcrumb-bg-2.jpg");?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Services</span>
                        <h1>Sampesa Group Ltd</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Credit Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--End breadcrumb area-->

<section class="about-content">
    <div class="container-fluid">
        <div class="row d-flex gap-2">
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loans/property_loan" target="_top">
                        <div>
                            <figure><img class="img-responsive" src="{{asset('storage/front/loans/propertylo.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;"></figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px; height: fit-content; ">
                            <h3 style="padding-bottom: 10px; font-weight: bold; color: #3399ff;">Property Loans</h3>
                            <p style="font-size: 90%; white-space: pre; overflow: hidden; text-overflow: ellipsis;">8% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/property_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/property_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/personal_deposit_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/personalloan.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Personal Deposit Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">5% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/personal_deposit_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/personal_deposit_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/log_book_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/logbookloan.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%; object-position: 100% 0;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Log Book Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-size: 90%;">
                                6.5% Monthly for 3 to 24 Months
                            </p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/log_book_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/log_book_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/pay_slip_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/payslip.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Pay Slip(Salary) Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">3.5% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/pay_slip_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/pay_slip_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/house_hold_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/household.jpg')}}" alt="" target="_top" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                House Hold Items Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">8% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/house_hold_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/house_hold_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/stock_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/bond.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Stock & Bonds Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">6.5% Monthly for 3 to 24 Months</p>

                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/stock_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/stock_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/life_insurance_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/life.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Life Insurance Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">6.5% Monthly for 3 to 24 Months</p>

                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/life_insurance_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/life_insurance_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/personal_guarantor_loan" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/guarantor.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Personal Guarantor Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">6.5% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/personal_guarantor_loan">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/personal_guarantor_loan">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/loan_buy_off" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/buyoff.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Loan Buy-Offs
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">6.5% Monthly for 3 to 24 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/loan_buy_off">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/loan_buy_off">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 p-2">
                <div class="card h-100 p-2">
                    <a href="/loan/business_capital_loans" target="_top">
                        <div>
                            <figure>
                                <img class="img-responsive" src="{{asset('storage/front/loans/buyoff.jpg')}}" alt="" style="height: 180px; object-fit: cover;width:100%;">
                            </figure>
                        </div>
                        <div class="caption text-center" style="padding: 10px;">
                            <h3 style="padding-bottom: 10px; font-weight: bold;color:#3399ff;">
                                Business Capital Loans
                            </h3>
                            <p style="font-size: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">6.5% Monthly for 6 to 48 Months</p>
                        </div>
                    </a>
                    <div class="d-flex justify-content-between">
                        <a target="_top" href="/loan/apply/business_capital_loans">
                            <span class="btn btn-sm btn-primary">APPLY &raquo; </span>
                        </a>
                        <a target="_top" href="/loan/business_capital_loans">
                            <span class="btn btn-sm btn-success">More &raquo; </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection