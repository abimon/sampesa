@extends('layouts.app',['title'=>'Pay Slip Loan'])
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
                    <li class="ms-2 active">Payslip Loans</li>
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
                            <img src="{{asset('storage/front/loans/pay1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/payslip.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/pay3.jpg')}}" class="d-block w-100" alt="...">
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
                <p>Pay slip loans, also known as salary loans, are a type of loan offered by Sampesa Group Limited that allows individuals to borrow money based on their regular income and pay slip. These loans provide a convenient and accessible financing option for individuals who need quick access to funds before their next payday.
                </p>
                <p>One of the advantages of pay slip loans is their quick processing time. Since the loan is based on your regular income and pay slip, the documentation required is minimal, and the loan approval process is typically faster compared to traditional loans. This makes pay slip loans an ideal solution for those who need immediate funds.</p>
                <p>At Sampesa Group Limited, we provide reliable and efficient pay slip loan services. Our experienced loan officers will guide you through the application process, ensuring a seamless experience. We offer competitive interest rates, flexible repayment options, and personalized service to meet your specific financial needs.</p>
                <p>Pay slip loans offer a convenient way to address short-term financial challenges and unexpected expenses. Contact Sampesa Group Limited today to learn more about pay slip loans and discover how we can assist you in securing the funds you need in a timely manner.</p>
                <div class="text-center"><a href="/loan/apply/pay_slip_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
            </div>
        </div>
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
                <a href="/loan/log_book_loan">
                    <div class="hover01 column">
                        <div>
                            <figure>
                                <img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/logbookloan.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;">
                            </figure>
                        </div>
                    </div>
                    <h4 class="text-center">Log Book Loans</h4>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection