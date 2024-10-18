@extends('layouts.app',['title'=>'Services'])
@section('content')
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Services</span>
                        <h1>Sampesa Group Ltd</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Credit Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--End breadcrumb area-->
<section class="mt-3">
    <div class="container">
        <div class="text-center">
            <div class="">
                <div class="sec-title">
                    <div class="title">REAL ESTATE <span>CONSULTANT</span></div>
                </div>
            </div>
            <div class="">
                <div class="text">
                    <p>Sampesa Group Limited is a registered firm in Kenya that deals with Property Development and Real Estates investment/ Management. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Start services style2 Service Page-->
<section class="services-style2-service-page mb-3">
    <div class="row">
    <!-- "s9.jpg",
            "Asset Valuation",
            "Our asset valuation services offer accurate and insightful assessments,providing you with a clear understanding of the true value of your assets for informed decision-making and maximizing your investment potential.",
            "valuation" -->
        @foreach ($services as $service)
        <!--Start single service style2-->
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                <div class="img-holder">
                    <img src="{{asset('storage/front/images/services/'.$service[0])}}" alt="Awesome Image">
                    <div class="overlay-style-two"></div>
                </div>
                <div class="text-holder">

                    <div class="inner">
                        <h3>{{$service[1]}}</h3>
                        <div class="text">
                            <p>{{$service[2]}}</p>
                        </div>
                        <div class="read-more">
                            <a class="btn-one" href="/services/{{$service[3]}}">Read More<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End single service style2-->
        @endforeach
    </div>
</section>
@endsection