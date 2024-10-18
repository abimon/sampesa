@extends('layouts.app',['title'=>'Business Capital Loan'])
@section('content')
<section class="portfolio-item-header">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.php" target="_top">Home</a></li>
                    <li class=""><a href="our-services.php" target="_top">Our Services</a> </li>
                    <li class="active">Business Capital Loans</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
<section class="portfolio-item-info" style="padding-top: 2em;">
    <div class="container">
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('storage/front/loans/pay1.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/pay7.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('storage/front/loans/pay5.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="head1" style="text-align: center; text-transform: uppercase;">
                    <strong>Description</strong>
                </h3>
                <p style="line-height: 2;">

                    At Sompesa Group Limited, we collaborate with specialized companies to provide collateral guarantees, enabling clients who may not have direct access to conventional loan collaterals to secure necessary financing. Here's a detailed overview of our collateral guarantee services:.
                </p>
            </div>
            <center style=""><a href="registration.php" target="_top" class="btn btn-danger btn-blink">Request Service</a></center>
        </div>
        <div class="row">
            <!--	<p class="text-center" style="line-height:30px ;">-->
            <!--Business capital loans can be beneficial for borrowers who have accumulated various loans from different sources, such as credit cards, personal loans, or other types of debt. By consolidating these debts into a single loan, borrowers can have a clearer picture of their financial situation and work towards becoming debt-free more efficiently.-->

            <!--At Sampesa Group Limited, we assess each borrower's financial situation and design a loan buy-off plan that suits their specific needs and repayment capabilities. Our goal is to help borrowers achieve better financial stability and offer a manageable path to repay their loans.-->

            <!--It's important to note that loan buy-offs should be approached with careful consideration and financial planning. While loan consolidation can offer advantages, borrowers should assess the total costs, fees, and the impact on their credit score before proceeding.-->

            <!--Our experienced team at Sampesa Group Limited ensures a transparent and efficient loan buy-off process. We provide personalized guidance, answer any questions you may have, and strive to make the consolidation process as seamless as possible.-->

            <!--If you have multiple loans and are looking to streamline your debt management, loan buy-offs from Sampesa Group Limited offer a practical solution. Contact us today to learn more about our loan buy-off services and how they can help you take control of your financial situation.-->
            <!--	    </p>-->
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Client Engagement Strategy
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    To ensure transparency and foster trust, clients will have access to a dedicated portal. This portal will allow them to monitor the progress of transactions, view detailed loan statements, check remaining balances, and track accrued interest. This system is designed to maintain clarity and eliminate any hidden charges, providing clients with full visibility into every aspect of their financial engagement with us.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Eligibility and Requirements
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Eligible applicants must:<br>
                    - Own an operational business.<br>
                    - Hold valid business licenses.<br>
                    - Demonstrate repayment capability.<br>
                    - Have a good credit and repayment history.<br>
                    - Agree to our oversight on funds usage.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Due Diligence and Approval Process
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Our thorough due diligence includes:<br>
                    - A feasibility study to confirm the authenticity and viability of the business, conducted at the client's expense (2% of the requested amount).<br>
                    - A Letter of Offer that stipulates the approved amount, which can vary depending on the assessment of business credibility.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Acceptable Securities
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Clients can secure loans using:<br>
                    - Title deeds.<br>
                    - Bank guarantees.<br>
                    - Fixed deposit guarantees.<br>
                    - Vehicle logbooks.<br>

                    This range of securities options provides flexibility and ensures that various forms of capital can be leveraged to support loan approval.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Security and Legal Considerations
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Upon approval, requirements include:<br>
                    - Adequate collateral to secure the loan.<br>
                    - Execution of a detailed loan agreement, defining the loan terms, customized to meet the client’s needs.<br>
                    - Involvement of legal experts to ensure all transactions are legally sound.
                </p>
            </div>
            <div class="col-md-6">
                <h3 class="head1" style="text-align: center;">
                    Flexible Repayment
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    We provide adaptable repayment plans tailored to the client’s financial circumstances and preferences, ensuring a manageable repayment process.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="head1" style="text-align: center;">
                    Enhanced Collateral Guarantee Partnerships
                </h3>
                <!--<p style="font-size: 100%; line-height: 2;">-->
                <!--    At Sompesa Group Limited, we collaborate with specialized companies to provide collateral guarantees, enabling clients who may not have direct access to conventional loan collaterals to secure necessary financing. Here's a detailed overview of our collateral guarantee services:-->
                <!--     </p>-->
                <p style="font-size: 100%; line-height: 2;">
                    At Sompesa Group Limited, we collaborate with specialized companies to provide collateral guarantees, enabling clients who may not have direct access to conventional loan collaterals to secure necessary financing. Here's a detailed overview of our collateral guarantee services:<br>
                    <!--1. Sampesa<br>-->
                    <!--2.Sampesa-->
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    1. Eligibility Criteria
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Clients seeking a collateral guarantee must demonstrate a satisfactory credit history, meet specific business revenue thresholds, and provide necessary documentation as required by the guarantor.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    2. Collateral Guarantee Provision
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    2. Our partners facilitate the provision of recognized securities on behalf of the borrower as a guarantee for the loan. Acceptable collaterals include land title deeds, vehicle logbooks, or fixed deposit certificates, chosen based on the borrower's needs and guarantor's terms.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    3. Duration and Terms
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    The collateral is held for the duration of the loan or until the borrower fulfills their repayment obligations. Detailed terms are specified in the guarantee agreement, ensuring clarity and mutual understanding.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    4. Process for Claiming Collateral
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    In cases of non-repayment, the guarantor will initiate a pre-defined process to claim the collateral. This involves legal proceedings if necessary, with specified timelines for conversion of the collateral into cash to cover the debt.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    5. Recovery and Excess Proceeds
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    If the collateral is sold and the proceeds exceed the outstanding loan amount, the excess funds are returned to the borrower, ensuring fairness and transparency.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    6. Renegotiation and Extensions
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    We provide options for renegotiation of terms or extensions of the loan period in response to financial challenges faced by the borrower, aiming for flexibility and support in difficult time
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    7. Transparency and Communication
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Throughout the loan term, continuous communication is maintained between the borrower, the lender, and the collateral guarantee company. All parties are promptly informed of any updates, changes, or decisions related to the collateral or loan conditions.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    8. Fees and Costs
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    Borrowers are responsible for any fees associated with the collateral guarantee service, which are clearly stated upfront and incorporated into the loan agreement.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="head1" style="text-align: center;">
                    9. Examples and Scenarios
                </h3>
                <p style="font-size: 100%; line-height: 2;">
                    To help potential clients understand this service better, we provide examples and case studies that illustrate successful implementations of our collateral guarantees.
                </p>
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
            <div class="col-sm-3 col-xs-6">
                <a href="property_loan.php" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="images/propertylo.jpg" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Property Loans</h4>

                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="personal_deposit_loan.php" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="images/personal4.jpg" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="text-center">Personal Deposit Loans</h4>

                </a>
            </div>



            <div class="col-sm-3 col-xs-6">
                <a href="house_hold_loan.php" target="_top">
                    <div class="hover01 column">
                        <div>
                            <figure><img class="img-responsive img-hover img-related" src="images/household.jpg" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="text-center">House Hold Loans</h4>

                </a>
            </div>

        </div>




        <!-- /.row -->
    </div>
</section>
@endsection