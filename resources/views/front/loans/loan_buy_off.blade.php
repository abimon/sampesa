@extends('layouts.app',['title'=>'Loan Buy Off'])
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
                            <img src="{{asset('storage/front/loans/pay1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/pay5.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/pay7.jpg')}}" class="d-block w-100" alt="...">
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
                <p>Loan buy-offs, provided by Sampesa Group Limited, are a financial service that allows individuals or businesses to consolidate their existing loans into a single new loan with better terms and conditions. This process involves paying off the outstanding balances of existing loans and transferring them to a new loan arrangement with Sampesa Group Limited.</p>
                <p>Loan buy-offs can be beneficial for borrowers who have accumulated various loans from different sources, such as credit cards, personal loans, or other types of debt. By consolidating these debts into a single loan, borrowers can have a clearer picture of their financial situation and work towards becoming debt-free more efficiently.</p>
                <p>At Sampesa Group Limited, we assess each borrower's financial situation and design a loan buy-off plan that suits their specific needs and repayment capabilities. Our goal is to help borrowers achieve better financial stability and offer a manageable path to repay their loans.</p>
                <p>It's important to note that loan buy-offs should be approached with careful consideration and financial planning. While loan consolidation can offer advantages, borrowers should assess the total costs, fees, and the impact on their credit score before proceeding.</p>
                <p>Our experienced team at Sampesa Group Limited ensures a transparent and efficient loan buy-off process. We provide personalized guidance, answer any questions you may have, and strive to make the consolidation process as seamless as possible.</p>
                <p>If you have multiple loans and are looking to streamline your debt management, loan buy-offs from Sampesa Group Limited offer a practical solution. Contact us today to learn more about our loan buy-off services and how they can help you take control of your financial situation.</p>
                <div class="text-center"><a href="/loan/apply/loan_buy_off" target="_top" class="btn btn-success">Apply this Loan</a></div>
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