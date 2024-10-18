@extends('layouts.app',['title'=>'Stocks & Bonds Loan'])
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
                    <li class="ms-2 active">Stock & Bonds Loans</li>
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
                            <img src="{{asset('storage/front/loans/bond.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/bond1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/bond2.jpg')}}" class="d-block w-100" alt="...">
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
                    Stock and bond loans, offered by Sampesa Group Limited, provide a unique financing option for individuals and businesses who hold stocks or bonds as assets.
                    These loans allow you to unlock the value of your securities without needing to sell them, providing access to immediate funds while retaining ownership of your investments.
                </p>
                <p>
                    One of the significant advantages of stock and bond loans is that they provide access to liquidity without the need to liquidate your investments. By using your securities as collateral, you can maintain your investment positions and potentially benefit from future market gains. This allows you to seize financial opportunities or address immediate financial needs without disrupting your long-term investment strategy.
                </p>
                <p>Sampesa Group Limited offers stock and bond loans with competitive interest rates and flexible repayment terms. Our experienced team ensures a smooth loan application process, providing personalized guidance and efficient service throughout.</p>
                <p>It's important to note that stock and bond loans carry certain risks, as the value of securities can fluctuate in the market. Therefore, it's crucial to consider the potential risks and consult with a financial advisor or investment professional to understand the implications of using your securities as collateral.</p>
                <p>If you hold stocks or bonds and require access to funds while retaining ownership of your investments, stock and bond loans from Sampesa Group Limited offer a convenient and flexible financing solution. Contact us today to learn more about our stock and bond loan options and how they can benefit your specific financial goals and needs.</p>
                </p>
                <div class="text-center"><a href="/loan/apply/stock_loan" target="_top" class="btn btn-success">Apply this Loan</a></div>
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