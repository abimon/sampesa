@extends('layouts.app',['title'=>'About'])
@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Sampesa Group Limited</span>
                            <h1>About Us</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="active">About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->
<!--Start About Style2 Area-->
<section class="about-style2-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="about-style2-text">
                    <div class="sec-title">
                        <p>About Us</p>
                        <div class="title">Welcome To <br>Sampesa Group<br><span> Limited</span></div>
                    </div>
                    <div class="text">
                        <p>
                            Sampesa Group Limited is a registered firm in Kenya that deals with Property Development and Real Estates
                            investment/ Management. The company has the following Departments namely:-
                        <ul class="list-unstyled" style="padding-left: 30px; padding-bottom: 15px;font-size:15px;line-height:30px;">
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px">Property Development Department.</li>
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px">Asset Valuation Department.</li>
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px">Property/Asset Management Department.</li>
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px"> Arch works Department.</li>
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px">Credit/Loans Department.</li>
                            <li><img src="https://img.icons8.com/?size=100&id=XfQ0piKEin3c&format=png&color=000000" height="25px" width="25px">Property Value Addition Department.</li>
                        </ul>
                        Our Company started in year 2003 being incorporated in 2009 and in conjunction with contractors and
                        investors, it has been able to provide opportunity to property and land owners with big dreams of
                        owning rental houses to achieve them via this program. Our goal is to exceed the expectations of
                        every client by offering outstanding customer service, increased flexibility, and greater value,
                        thus optimizing system functionality and improving operation efficiency.
                        </p>
                    </div>

                    <div class="button">
                        <a class="btn-one" href="#">Read More<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="position-relative h-100">
                    <img src="{{asset('storage/front/images/resources/sam9.jpg')}}" class="img-fluid w-100  about-pic" style="object-fit: cover;" alt="">
                    <div class="bg-white">
                        <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">

                            <img src="{{asset('storage/front/images/resources/propd.jpg')}}" class="img-fluid" alt="">

                        </div>
                        <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                            <img src="{{asset('storage/front/images/resources/saml.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Style2 Area-->

<!--Start Company Overview Area-->
<section class="company-overview-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="intro-box clearfix">
                    <div class="sec-title">
                        <p>Sampesa Group Limited</p>
                        <div class="title">Real Estate Development<br> <span>And Financial Services</span></div>
                    </div>
                    <div class="text">
                        <p>At Sampesa Group Ltd we are excited to have the opportunity to work with you on your investment journey. Our extensive experience and knowledge in the real estate market allows us to provide you with expert guidance and support throughout your investment journey.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="history-content-box clearfix">
                    <div class="history-carousel owl-carousel owl-theme">
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('storage/front/images/resources/propd2.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">

                                    <div class="title">
                                        <h3>PROPERTY DEVELOPMENT</h3>
                                    </div>
                                    <div class="text">
                                        <p>Our property development services encompass the entire lifecycle of projects, from conceptualization to delivery, ensuring exceptional results and transformative spaces that inspire.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('storage/front/images/resources/personall.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">

                                    <div class="title">
                                        <h3>CREDIT / LOAN SERVICES</h3>
                                    </div>
                                    <div class="text">
                                        <p>we provide comprehensive credit services to help you navigate the complexities of credit and achieve your financial goals</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('storage/front/images/resources/court2.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">

                                    <div class="title">
                                        <h3>COURT BAILS INCLUDING SURETIES</h3>
                                    </div>
                                    <div class="text">
                                        <p>We offer comprehensive services for court bail arrangements, including the provision of sureties and collateral. Our team ensures a smooth process, guiding you through each step to secure the necessary guarantees for bail.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('storage/front/images/resources/colla.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">

                                    <div class="title">
                                        <h3>COLLATERAL GUARANTEE</h3>
                                    </div>
                                    <div class="text">
                                        <p>Our collateral guarantee service ensures that your assets are fully protected, providing you with peace of mind. We offer comprehensive support to secure your investments, backed by our financial solutions.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                        <!--Start Single History Content-->
                        <div class="single-history-content">
                            <div class="img-box">
                                <div class="inner">
                                    <img src="{{asset('storage/front/images/resources/proj22.jpg')}}" alt="Awesome Image">
                                </div>
                            </div>
                            <div class="text-box">
                                <div class="inner">

                                    <div class="title">
                                        <h3>Property Management</h3>
                                    </div>
                                    <div class="text">
                                        <p>Our property management services streamline operations, enhance asset performance, and provide peace of mind, allowing you to focus on your core business while we expertly handle the day-to-day management of your properties.</p>
                                        <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single History Content-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Company Overview Area-->

<!--Start services style2 Service Page-->
<section class="services-style2-service-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="sec-title">
                    <p>OUR SERVICES</p>
                    <div class="title">REAL ESTATE <span>CONSULTANT</span></div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="text">
                    <p>Sampesa Group Limited is a registered firm in Kenya that deals with Property Development and Real Estates investment/ Management. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s1.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Property Development / Joint Venture</h3>
                            <div class="text">
                                <p>Our property development services encompass the entire lifecycle of projects, from conceptualization to delivery, ensuring exceptional results and transformative spaces that inspire.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/property_development">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s2.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Drawings And Designs</h3>
                            <div class="text">
                                <p>Our drawings and designs combine innovative concepts,aesthetic appeal, and functional efficiency, creating spaces that harmonize with the environment, elevate experiences, and inspire the imagination.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/drawings">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s3.jpeg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Credit Services/ Loans</h3>
                            <div class="text">
                                <p>we provide comprehensive credit services to help you navigate the complexities of credit and achieve your financial goals</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/loans">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->

            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s4.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Court Bails including Sureties</h3>
                            <div class="text">
                                <p>We offer comprehensive services for court bail arrangements, including the provision of sureties and collateral. Our team ensures a smooth process, guiding you through each step to secure the necessary guarantees for bail.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/court_bail">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s5.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Collateral Guarantee</h3>
                            <div class="text">
                                <p>Our collateral guarantee service ensures that your assets are fully protected, providing you with peace of mind. We offer comprehensive support to secure your investments, backed by our financial solutions.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/collateral">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s6.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Property Management</h3>
                            <div class="text">
                                <p>Our property management services streamline operations, enhance asset performance, and provide peace of mind, allowing you to focus on your core business while we expertly handle the day-to-day management of your properties.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/property_management">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->

            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s7.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Property Value Addition</h3>
                            <div class="text">
                                <p>Through strategic enhancements and innovative solutions, our property value addition services unlock the full potential of your real estate investments, maximizing their market value and ensuring a strong return on investment.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/value_addition">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s8.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">

                        <div class="inner">
                            <h3>Bio Gas & Borehole Installation</h3>
                            <div class="text">
                                <p>Our biogas installation services provide sustainable and cost-effective solutions, harnessing organic waste to produce clean energy and contributing to a greener future for both residential and commercial applications. We provide borehole drilling services.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/biogas_borehole">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
            <!--Start single service style2-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-service-style2 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1200ms">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/services/s9.jpg')}}" alt="Awesome Image">
                        <div class="overlay-style-two"></div>
                    </div>
                    <div class="text-holder">
                        <div class="inner">
                            <h3>Asset Valuation</h3>
                            <div class="text">
                                <p>Our asset valuation services offer accurate and insightful assessments,providing you with a clear understanding of the true value of your assets for informed decision-making and maximizing your investment potential.</p>
                            </div>
                            <div class="read-more">
                                <a class="btn-one" href="/valuation">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End single service style2-->
        </div>
    </div>
</section>
<!--End services style2 Service Page-->
@endsection