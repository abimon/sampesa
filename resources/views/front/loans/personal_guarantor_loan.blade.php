@extends('layouts.app',['title'=>'Life Insurance Loan'])
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
                    <li class="active">Personal Guarantor Loans</li>
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
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="images/guarantor.jpg" alt="" style="height: 400px; width: 100%; object-fit: cover;">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/guarantor2.jpg" alt="" style="height: 400px; width: 100%; object-fit: cover;">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/guarantor3.jpg" alt="" style="height: 400px; width: 100%; object-fit: cover;">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="head1" style="text-align: center; text-transform: uppercase;">
                    <strong>Description</strong>
                </h3>
                <p style="line-height: 2;">

                    Personal guarantor loans, offered by Sampesa Group Limited, are a type of loan that allows individuals to secure funds with the help of a personal guarantor.
                    These loans provide an opportunity for borrowers who may have limited credit history or insufficient collateral to obtain financing by having a trusted individual act as a guarantor for the loan.
                </p>
            <p class="text-center" style="line-height:30px ;">
                At Sampesa Group Limited, we understand the importance of trust and accountability when it comes to personal guarantor loans. We work closely with borrowers and guarantors, ensuring clear communication, transparency, and a smooth loan application process. Our experienced loan officers guide you through the necessary steps and provide support along the way.

                It's essential for both borrowers and guarantors to fully understand the responsibilities and obligations associated with personal guarantor loans. Open communication, trust, and financial stability between both parties are crucial for a successful loan arrangement.

                If you require financing but have limited credit history or collateral, personal guarantor loans from Sampesa Group Limited offer a viable solution. Contact us today to learn more about our personal guarantor loan services and how they can help you secure the funds you need with the support of a trusted guarantor.
            </p>
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