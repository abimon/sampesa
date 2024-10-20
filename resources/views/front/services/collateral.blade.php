@extends('layouts.app',['title'=>'Collateral Loan Services'])
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
                        <h1>Collateral Guarantee</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>

                            <li class="active">Collateral Guarantee</li>
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
                    <img src="{{asset('storage/front/images/resources/cg.jpg')}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Collateral Guarantee</p>

                    </div>
                    <div class="inner-content">
                        <p>Our collateral guarantee service ensures that your assets are fully protected, providing you with peace of mind. We offer comprehensive support to secure your investments, backed by our financial solutions.</p>
                        <div class="bottpm-text">

                            <p>At Sampesa Group Ltd, we prioritize the security of your assets through our comprehensive collateral guarantee services. We ensure that your investments are well-protected, providing you with confidence and peace of mind. Our dedicated team offers tailored financial solutions to safeguard your assets, guiding you every step of the way. Whether you’re seeking to secure bail arrangements or protect your investments, you can trust us to manage your collateral with the utmost care and professionalism. With our expertise, your assets remain secure, allowing you to focus on your goals with full assurance.</p>

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