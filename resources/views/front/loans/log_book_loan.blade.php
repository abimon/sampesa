@extends('layouts.app',['title'=>'Log Book Loan'])
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
                    <li class="ms-2 active">Log Book Loans</li>
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
                            <img src="{{asset('storage/front/loans/logbookloan.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/log5.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/log7.jpg')}}" class="d-block w-100" alt="...">
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
                <p>Log book loans, offered by Sampesa Group Limited, are a type of secured loan that allows individuals to borrow money by using their vehicle's log book (vehicle registration certificate) as collateral. These loans provide a convenient and accessible financing option for individuals who need immediate funds but may have limited credit history or face difficulty obtaining traditional unsecured loans.</p>
                <p>At Sampesa Group Limited, we offer professional and reliable log book loan services. Our dedicated team of loan officers will guide you through the application process, ensuring a smooth and transparent experience. We strive to provide competitive interest rates, flexible repayment options, and exceptional customer service.</p>
                <p>Log book loans provide an accessible financing solution for individuals who need quick access to funds and are willing to leverage the value of their vehicle. Contact Sampesa Group Limited today to learn more about log book loans and discover how we can assist you in achieving your financial goals.</p>
                <div class="text-center"><a href="/loan/apply/log_book_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
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
    </div>
</section>
@endsection