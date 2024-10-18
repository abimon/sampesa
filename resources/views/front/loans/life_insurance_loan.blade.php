@extends('layouts.app',['title'=>'Life Insurance Loan'])
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
                    <li class="ms-2 active">Life Insurance Loans</li>
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
                            <img src="{{asset('storage/front/loans/life.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/life1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/lifeinsurance.jpg')}}" class="d-block w-100" alt="...">
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
                <p>Life insurance loans, provided by Sampesa Group Limited, offer a unique borrowing option that allows individuals to access the cash value of their life insurance policies. These loans provide a means to access immediate funds without surrendering or canceling the life insurance coverage.
                </p>
                <p>At Sampesa Group Limited, we offer life insurance loans with competitive interest rates and flexible terms. Our experienced team can guide you through the loan application process, ensuring a smooth experience and providing personalized assistance.</p>
                <p>It's important to note that taking a life insurance loan reduces the death benefit available to beneficiaries and may have tax implications. It's recommended to consult with a financial advisor or insurance professional to understand the potential impact on your policy and financial situation.</p>
                <p>If you have a permanent life insurance policy with accumulated cash value and need access to funds, life insurance loans from Sampesa Group Limited offer a convenient and flexible borrowing option. Contact us today to learn more about our life insurance loan services and how they can meet your financial needs.</p>
                </p>
            </div>
            <div class="text-center"><a href="/loan/apply/life_insurance_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
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
                                <img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/payslip.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;">
                            </figure>
                        </div>
                    </div>
                    <h4 class="text-center">Pay Slip(Salary) Loans</h4>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection