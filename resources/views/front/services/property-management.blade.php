@extends('layouts.app',['title'=>'Property Management'])
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
                        <h1>Property Management</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index.php">Home</a></li>

                            <li class="active">Property Management</li>
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
                    <img src="images/resources/pm.jpg" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Property Management</p>

                    </div>
                    <div class="inner-content">
                        <p>At SAMPESA, Our property management service ensures hassle-free ownership for property investors. We handle tenant screening, rent collection, maintenance, and more. Sit back and enjoy passive income with Sampesa Group Limited.</p>
                        <div class="bottpm-text">

                            <p>We take pride in offering top-tier property management services that cater to the diverse needs of property owners and investors. With years of industry expertise, our team is dedicated to providing comprehensive solutions that maximize the value and potential of your properties. Our property management approach is rooted in efficiency and effectiveness. We handle the day-to-day operations, from tenant sourcing and lease agreements to rent collection and property maintenance, allowing you to focus on your core business or other pursuits without the stress of managing your properties.
                                We prioritize tenant satisfaction, recognizing that happy tenants lead to longer tenancies and reduced vacancies. Our responsive and attentive property management team ensures that tenant needs are addressed promptly, fostering a positive living or working experience.
                                Financial performance is at the heart of our services. We implement strategic financial planning, closely monitor expenses, and work to optimize rental income, ultimately enhancing the overall profitability of your real estate investments.
                                Moreover, Sampesa Group embraces sustainability and environmental responsibility. We integrate eco-friendly practices into our property management approach, seeking ways to reduce energy consumption, promote recycling, and adopt greener initiatives that benefit both the environment and your bottom line.
                                When you partner with Sampesa Group for property management, you can expect transparency, professionalism, and a hands-on approach that aligns with your unique goals and preferences. Our dedication to delivering exceptional service sets us apart, making us the trusted choice for all your property management needs.</p>

                            <div class="button" style="align-items:center;">
                                <a class="btn-one" href="../registration.php">Request Service<span class="flaticon-next"></span></a>
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