@extends('layouts.app',['title'=>'Personal Deposit Loan'])
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
                    <li class="ms-2 active">Personal Deposit Loans</li>
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
                            <img src="{{asset('storage/front/loans/personal1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/personal2.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/personal5.jpg')}}" class="d-block w-100" alt="...">
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
                <p>Personal deposit loans are a type of loan offered by Sampesa Group Limited that allows individuals to borrow funds by using their personal savings or deposits as collateral. These loans provide a convenient and flexible borrowing option for individuals who have accumulated savings but need access to additional funds for various purposes.</p>
                <p>At Sampesa Group Limited, we offer personalized service and work closely with our clients to understand their financial goals and tailor personal deposit loans to meet their specific needs. Our experienced loan officers guide you through the loan application process, ensuring a smooth and efficient experience.
                </p>
                <p>Whether you need funds for a significant purchase or to cover unexpected expenses, personal deposit loans provide a convenient solution that allows you to access the financial resources you need while leveraging your existing deposits. Contact Sampesa Group Limited today to explore the benefits of personal deposit loans and find out how we can assist you in achieving your financial objectives.
                </p>
                <div class="text-center"><a href="/loan/apply/personal_deposit_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
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
                <a href="/loan/house_hold_loan" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="{{asset('storage/front/loans/household.jpg')}}" alt="" style="height:30vh;width:100%;object-fit:cover;"></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Household Loan</h4>
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