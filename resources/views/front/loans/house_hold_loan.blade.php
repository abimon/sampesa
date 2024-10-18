@extends('layouts.app',['title'=>'Household Loan'])
@section('content')
<section class="portfolio-item-header">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/" target="_top">Home</a>/</li>
                    <li class="ms-2 "><a href="/services" target="_top">Our Services</a>/</li>
                    <li class="ms-2 "><a href="/services/credit" target="_top">Credit Services</a>/</li>
                    <li class="ms-2 active">House Hold Items Loans</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<section class="portfolio-item-info" style="padding-top: 2em;">
    <div class="container">
        <!-- Portfolio Item Row -->
        <div class="row mb-3">

            <div class="col-md-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('storage/front/loans/house1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/loan1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/house1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-8">
                <p style="line-height: 2;">
                    Household item loans, provided by Sampesa Group Limited, are a type of loan specifically designed to help individuals or families purchase essential household items. These loans offer a convenient
                    and flexible financing option for acquiring items such as furniture, appliances, electronics, or other necessary items for your home.

                <p>By taking advantage of household item loans, you can enjoy the benefits of having necessary items for your home without the burden of a large upfront expense. These loans offer flexibility in repayment, allowing you to choose a repayment plan that suits your financial capabilities.</p>
                <p>At Sampesa Group Limited, we strive to provide competitive interest rates, transparent terms, and a streamlined application process for household item loans. Our experienced loan officers are available to guide you through the process, answer any questions you may have, and ensure a smooth borrowing experience.</p>
                <p>Whether you're furnishing your home, upgrading appliances, or investing in essential household items, household item loans from Sampesa Group Limited offer a practical solution to meet your needs. Contact us today to explore how our loans can help you acquire the household items you require, making your home comfortable and functional.</p>
                <div class="text-center"><a href="/loan/apply/house_hold_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<section class="portfolio-item-gallery">
    <h3 class="text-center">Related Loans</h3>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-4">
                <a href="/loan/property_loan" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/propertylo.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;"></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Property Loans</h4>

                </a>
            </div>
            <div class="col-md-4">
                <a href="/loan/personal_deposit_loan" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/personal4.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;"></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Personal Deposit Loans</h4>

                </a>
            </div>
            <div class="col-md-4">
                <a href="/loan/pay_slip_loan">
                    <div class="hover01 column">
                        <div>
                            <figure>
                                <img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/payslip.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;"></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Pay Slip(Salary) Loans</h4>

                </a>
            </div>

        </div>




        <!-- /.row -->
    </div>
</section>
@endsection