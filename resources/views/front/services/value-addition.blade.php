@extends('layouts.app',['title'=>'Value Addition'])
@section('content')

<?php $img =asset("storage/front/images/resources/breadcrumb-bg-2.jpg");?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Sampesa Group Limited</span>
                        <h1>Property Value Addition</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index.php">Home</a></li>

                            <li class="active">Property Value Addition</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Project Description area-->
<section class="project-description-area">
    <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
        <img src="images/pattern/project-description-pattern.jpg" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img src="images/resources/pv.jpeg" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Property Value Addition</p>

                    </div>
                    <div class="inner-content">
                        <p>We employ a complete team of seasoned experts to get the job done right. We provide comprehensive, up-to-date reports that are based on actual sales in the market place. We assist
                            in liquidation, auction, or if you are seeking to obtain working capital by valuing assets that will be promised as collateral to asset-based lenders and investors. Furthermore,
                            we have the resources and ability to valuate individual assets or an entire company.</p>
                        <p>At Sampesa Group Ltd, our Property Value Addition services are designed to maximize the potential of your assets. Our team of seasoned experts delivers precise and comprehensive evaluations,
                            ensuring that you have accurate, market-based data to make informed decisions. Whether you're looking to liquidate, auction, or secure working capital through asset-based lending,
                            we provide tailored solutions to meet your needs. Our capabilities extend to valuing individual assets as well as entire companies, ensuring you receive the most accurate and beneficial assessment.
                            With our expertise, you can confidently enhance the value of your property and assets.</p>

                        <div class="button" style="align-items:center;">
                            <a class="btn-one" href="../registration.php">Request Service<span class="flaticon-next"></span></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Project Description area-->
@endsection