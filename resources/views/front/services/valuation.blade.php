@extends('layouts.app',['title'=>'Asset Valuation'])
@section('content')

<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Sampesa Group Limited</span>
                        <h1>Asset Valuation</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>

                            <li class="active">Asset Valuation</li>
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
        <img src="{{asset('storage/front/images/pattern/project-description-pattern.jpg')}}" alt="Pattern Bg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img src="{{asset('storage/front/images/resources/av.jpeg')}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Asset Valuation</p>

                    </div>
                    <div class="inner-content">
                        <p>At SAMPESA, We employ a complete team of seasoned experts to get the job done right. We provide comprehensive, up-to-date reports that are based on actual sales in the marketplace.
                            We assist in liquidation, auction, or if you are seeking to obtain working capital by valuing assets that will be promised as collateral to asset-based lenders and investors.
                            Furthermore, we have the resources and ability to valuate individual assets or an entire company.</p>
                        <div class="bottpm-text">

                            <p>We do carry out asset valuation which entails the assessment

                                of the value of a company, real property or any other item of worth. In particular, we valuate assets that produce cash flows for purchase, sale,management or insurance .We also carry out business valuation to estimate the economic value of an owner's interest in a business and project valuation to give an informed projection of the cost of bringing a project to fruition.
                            </p>
                            <p>
                                Similarly, we also carry out valuations when getting into property joint ventures between our investors and our land owners and also before disbursing loans for the funding of various property oriented projects and undertakings of our clients. Valuation is also done before commencing management work for buildings we come into a mutual agreement with the landlords after which we pay-off the landlord 1 year’s rent for the building and take over management of the same at an agreed repayment plan.</p>

                            <div class="button" style="align-items:center;">
                                <a class="btn-one" href="">Request Service<span class="flaticon-next"></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--End Project Description area-->
@endsection