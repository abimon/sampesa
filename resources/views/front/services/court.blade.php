@extends('layouts.app',['title'=>'Court Bail Services'])
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
                        <h1>Court Bails including Sureties</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>

                            <li class="active">Court Bails including Sureties</li>
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
            <div class="col-md-5">
                <div class="project-description-image-box">
                    <img src="{{asset('storage/front/images/resources/bond.jpg')}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Court Bails including Sureties</p>
                    </div>
                    <div class="inner-content">
                        <p>At SAMPESA, We offer comprehensive services for court bail arrangements, including the provision of sureties and collateral. Our team ensures a smooth process, guiding you through each step to secure the necessary guarantees for bail.</p>
                        <div class="bottpm-text">

                            <p>We are committed to offering comprehensive and reliable court bail services tailored to meet the needs of our clients across Kenya. We understand the complexities and challenges that can arise during legal proceedings, which is why we provide expert guidance and support at every step of the bail process. Our services include the provision of sureties and the arrangement of collateral, ensuring that you have the necessary guarantees to secure bail quickly and efficiently. With a deep understanding of the Kenyan legal system, our experienced team works tirelessly to provide solutions that bring you peace of mind when you need it most. Whether you're dealing with a minor legal matter or a more complex situation, Sampesa Group Ltd is here to support you with professionalism, integrity, and a commitment to your rights.</p>

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