@extends('layouts.app',['title'=>'Home'])
@section('content')
<div>

    <!--Main Slider-->
    <section class="main-slider style2">
        <!-- Video Background -->
        <video class="rev-slidebg" autoplay muted loop>
            <source src="{{asset('storage/front/images/slides/real_estate2.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_two" data-version="5.4.1">

                <ul>
                    <!-- Slide 1 -->
                    <li class="center-container" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default"
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide Title" data-transition="parallaxvertical">



                        <!-- Slide Content -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','900']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['-100','-100','-80','-90']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">Welcome To</div>
                            </div>
                            <div class="slide-content center-slide">
                                <div class="big-title" style="font-family: 'Montserrat', sans-serif;">
                                    SAMPESA GROUP LIMITED
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[40,40,40,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">"We give opportunity before it becomes obvious."</div>
                            </div>
                        </div>

                        <!-- Updated buttons with classes -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none"
                            data-width="['800','800','700','400']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['100','100','80','90']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="btn-box">
                                    <a class="glow-button" href="" data-toggle="modal" data-target="#appointmentModal">Book Appointment</a>
                                    <a class="glow-button" href="/contact">Enquire Service</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li class="center-container" data-description="Slide 2 Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1690" data-masterspeed="default"
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide 2 Title" data-transition="parallaxvertical">



                        <!-- Slide Content -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','900']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['-100','-100','-80','-90']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">Our Mission</div>
                            </div>
                            <div class="slide-content center-slide">
                                <div class="big-title" style="font-family: 'Montserrat', sans-serif;">
                                    Quality & Excellence
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[40,40,40,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">"Delivering top-tier services to our clients."</div>
                            </div>
                        </div>

                        <!-- Updated buttons with classes -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none"
                            data-width="['800','800','700','400']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['100','100','80','90']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="btn-box">
                                    <a class="glow-button" href="" data-toggle="modal" data-target="#appointmentModal">Book Appointment</a>
                                    <a class="glow-button" href="/contact">Enquire Service</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li class="center-container" data-description="Slide 3 Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1691" data-masterspeed="default"
                        data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide 3 Title" data-transition="parallaxvertical">



                        <!-- Slide Content -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','900']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['-100','-100','-80','-90']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">Our Vision</div>
                            </div>
                            <div class="slide-content center-slide">
                                <div class="big-title" style="font-family: 'Montserrat', sans-serif;">
                                    Innovation & Growth
                                </div>
                            </div>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[40,40,40,0]"
                            data-responsive_offset="on" data-type="text" data-height="none" data-width="['800','800','700','400']" data-whitespace="normal"
                            data-hoffset="['0','0','0','0']" data-voffset="['0','0','0','0']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']" data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="text">"Pioneering new approaches in real estate."</div>
                            </div>
                        </div>

                        <!-- Updated buttons with classes -->
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none"
                            data-width="['800','800','700','400']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['100','100','80','90']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['center','center','center','center']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},
                    {"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="slide-content center-slide">
                                <div class="btn-box">
                                    <a class="glow-button" href="" data-toggle="modal" data-target="#appointmentModal">Book Appointment</a>
                                    <a class="glow-button" href="/contact">Enquire Service</a>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    <!--Start About Style2 Area-->
    <section class="about-style2-area" id="about">
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
                            <a class="btn-one" href="/about">Read More<span class="flaticon-next"></span></a>
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
    <!--Start Why choose Area-->
    <section class="why-choose-area" style="background-image:url(storage/front/images/parallax-background/why-choose-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 why-choose-title float-left">
                    <div class="sec-title">
                        <div class="icon"><img src="{{asset('storage/front/images/resources/saml.png')}}" alt="Awesome Logo" style="width: 90px;"></div>
                        <div class="title">Why<br><span>Sampesa Group Ltd</span></div>
                    </div>
                    <ul>
                        <li>Expert real estate guidance</li>
                        <li>Hassle-free wealth growth</li>
                        <li>Trusted investment support</li>
                    </ul>
                    <div class="button">
                        <a class="btn-one" href="" data-toggle="modal" data-target="#appointmentModal">Book Appointment<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-md-8 why-choose-content float-right">
                    <!--Start Single Box-->
                    <div class="single-box redbg">

                        <div class="text-holder">
                            <h3>Vision</h3>
                            <p>Deliver top-quality financial solutions, foster creativity and innovation,
                                adapt to market changes, provide personalized services nationwide, and exceed
                                client expectations through deep commitment and understanding.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box whitebg">

                        <div class="text-holder">
                            <h3>Mission</h3>
                            <p>Provide early investment opportunities, educate clients on property benefits, improve access
                                to financial solutions, and deliver comprehensive property management services,
                                ensuring clients achieve their goals with expert support.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box whitebg">

                        <div class="text-holder">
                            <h3>Core Values</h3>
                            <p>Uphold integrity in all actions, ensure reliability through consistent
                                service delivery, and strive for excellence by maintaining the highest
                                quality in every project and service we offer.</p>
                        </div>
                    </div>
                    <!--End Single Box-->
                    <!--Start Single Box-->
                    <div class="single-box blackbg">

                        <div class="text-holder">
                            <h3>Free Consultation</h3>
                            <p>Book your free consultation for expert advice on property development,
                                financing, and joint ventures. Explore tailored solutions and succeed.
                            </p>
                        </div>
                    </div>
                    <!--End Single Box-->
                </div>
            </div>
        </div>
    </section>
    <!--End Why choose Area-->
    <div class="container">
        <div class="concept-design-pricing-box">
            <div class="title">
                <h2 class="text-center">Core Values</h2>
            </div>
            <div class="inner-content">
                <div class="row">
                    <!--Start Single Flexible box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-pricing-box wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="img-box">
                                    <img src="{{asset('storage/front/images/services/service-single/pricing-1.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="static-content text-center">
                                    <div class="table-header">
                                        <div class="package">
                                            <h1 style="font-size:40px;">Transparency</h1>
                                        </div>
                                        <div class="package" style="padding:20px;">
                                            <p>Throughout the joint venture process, we maintain transparent communication and provide regular updates, ensuring that you're involved in key decisions and have a clear understanding of the project's progress. We also handle the legal, financial, and operational aspects, ensuring compliance with regulatory requirements and maximizing efficiency.</p>
                                            <div class="button"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <h1 style="color:#428af5;">Transparency</h1>
                                    <p style="color:white;" class="package">Throughout the joint venture process, we maintain transparent communication and provide regular updates, ensuring that you're involved in key decisions and have a clear understanding of the project's progress. We also handle the legal, financial, and operational aspects, ensuring compliance with regulatory requirements and maximizing efficiency.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Flexible box-->
                    <!--Start Single Flexible box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-pricing-box wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="img-box">
                                    <img src="{{asset('storage/front/images/services/service-single/pricing-1.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="static-content text-center">
                                    <div class="table-header">
                                        <div class="package">
                                            <h1 style="font-size:40px;">Partnership</h1>

                                        </div>
                                        <div class="package" style="padding:20px;">

                                            <p>By partnering with Sampesa Group Limited in a property development joint venture, you can benefit from our extensive industry network, access to financing options, and proven track record in successful developments. We aim to create value and deliver profitable outcomes for all parties involved. Embarking on a property development joint venture with Sampesa Group Limited opens doors to exciting opportunities, accelerated growth, and shared success.</p>
                                            <div class="button"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <h1 style="color:#428af5;">Partnership</h1>
                                    <p style="color:white;">By partnering with Sampesa Group Limited in a property development joint venture, you can benefit from our extensive industry network, access to financing options, and proven track record in successful developments. We aim to create value and deliver profitable outcomes for all parties involved. Embarking on a property development joint venture with Sampesa Group Limited opens doors to exciting opportunities, accelerated growth, and shared success.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Flexible box-->
                    <!--Start Single Flexible box-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="single-pricing-box wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="inner">
                                <div class="img-box">
                                    <img src="{{asset('storage/front/images/services/service-single/pricing-1.jpg')}}" alt="Awesome Image">
                                </div>
                                <div class="static-content text-center">
                                    <div class="table-header">
                                        <div class="package">
                                            <h1 style="font-size:40px;">Returns and Ownership</h1>
                                        </div>
                                        <div class="package" style="padding:20px;">
                                            <p>We will ensure that our client is able to get 20-30% of the total revenue collected per month. whereas the company keeps the remaining for the period of months agreed in the joint venture agreement. The client has the obligation to advise whoever is managing the property. The property owner remains the registered owner of the Title Deed.</p>
                                        </div>
                                    </div>
                                    <div class="button"></div>
                                </div>
                                <div class="overlay-content">
                                    <h1 style="color:#428af5;">Returns and Ownership</h1>
                                    <p style="color:white;">We will ensure that our client is able to get 20-30% of the total revenue collected per month. whereas the company keeps the remaining for the period of months agreed in the joint venture agreement. The client has the obligation to advise whoever is managing the property. The property owner remains the registered owner of the Title Deed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Flexible box-->

                </div>
            </div>
        </div>
    </div>
    <!--Start Working Area-->
    <section class="working-area" style="background-image:url(/storage/front/images/parallax-background/working-bg.jpg);">
        <div class="container">
            <div class="sec-title with-text max-width text-center wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms">
                <p style="color: white;">OUR SERVICES</p>
                <div class="title clr-white" style="color: white;">Sampesa Group Limited</div>
                <p class="bottom-text" style="color: white;">We give opportunity before it becomes obvious.</p>
            </div>
            <div class="row">
                <!--Start Single Working Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-working-box wow fadeInDown" data-wow-delay="0ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{asset('storage/front/images/resources/propd.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-one"></div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="plus-icon-box"><span class="icon-plus"></span></div>
                            <div class="text" style="border: 3px #1a95ce solid ; padding:20px;">
                                <h3>Property Development</h3>
                                <p>Transforming spaces with innovative property development, delivering exceptional residential, commercial, and industrial real estate solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Working Box-->
                <!--Start Single Working Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-working-box wow fadeInDown" data-wow-delay="400ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{asset('storage/front/images/resources/personal5.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-one"></div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="plus-icon-box"><span class="icon-plus"></span></div>
                            <div class="text" style="border: 3px #1a95ce solid ; padding:20px;">
                                <h3>Credit / Loan Services</h3>
                                <p>Providing tailored credit and loan solutions to meet your financial needs, ensuring flexible terms and competitive rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Working Box-->
                <!--Start Single Working Box-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-working-box wow fadeInDown" data-wow-delay="800ms">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{asset('storage/front/images/resources/proper5.jpeg')}}" alt="Awesome Image">
                                <div class="overlay-style-one"></div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="plus-icon-box"><span class="icon-plus"></span></div>
                            <div class="text" style="border: 3px #1a95ce solid ; padding:20px;">
                                <h3>Property Management</h3>
                                <p>Expert property management services, ensuring seamless operations, tenant satisfaction, and optimal property performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Working Box-->
            </div>
            <div class="text-center button">
                <a class="btn-one" href="/services">More Services<span class="flaticon-next"></span></a>
            </div>
        </div>
    </section>
    <!--End Working Area-->

    <!--Start Working Process Style2 Area-->
    <section class="working-process-style2-area" style="background-image:url(storage/front/images/parallax-background/const.jpg);">
        <div class="container">
            <div class="sec-title">
                <p style="color: white;">Sampesa Group Limited</p>
                <div class="title" style="color: white;">Joint Venture Program Process</div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="working-process-carousel owl-carousel owl-theme">
                        @foreach ($data as $key=>$dat)
                        <!--Start Single Working Process-->
                        <div class="single-working-process-style2">
                            <div class="top-box clearfix">
                                <div class="count">
                                    <h1>Step {{$key+1}}</h1>
                                </div>
                            </div>
                            <div class="inner">
                                <h3>{{$dat[0]}}</h3>
                                <p>{{$dat[1]}}</p>
                            </div>
                        </div>
                        <!--End Single Working Process-->
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Working Process Style2 Area-->
    <!--Start slogan style2 area-->
    <section class="slogan-style2-area" style="background-image:url(storage/front/images/parallax-background/slogan-bg.jpg);">
        <div class="icon-holder">
            <img src="{{asset('storage/front/images/resources/saml.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title">

                        </div>
                        <div class="button">
                            <a class="btn-one call-us" href="#"><i class="icon-music"></i>
                                0724062218 | 0726717120</a>
                            <a class="btn-one" href="appointment.php">Book Appointment<span class="flaticon-next"></span></a>
                        </div>
                        <div class="title" style="padding-top: 20px;">
                            <h1>"Visit Our Offices at Global Trade Center(GTC) 14th floor, Westlands Nairobi"</h1>
                        </div>
                        <div class="button">
                            <a class="btn-one call-us" href="#">
                                info@sampesagroup.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan style2 area-->

    <!--Start Testimonial Style2 Area-->
    <section class="testimonial-style2-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>Testimonials</p>
                <div class="title">Our Customer <span>Words</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="testimonial-style2-content">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            @foreach ($tests as $test)
                            <!--Start Single Testimonial style2-->
                            <div class="single-testimonial-style2 text-center">
                                <div class="inner-content">
                                    <div class="static-content">
                                        <div class="quote-icon">
                                            <span class="icon-quote3"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>{{$test[0]}}</p>
                                        </div>
                                        <div class="client-info">
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h3>{{$test[1]}}</h3>
                                        </div>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="img-box">
                                            <img src="{{asset('storage/front/'.$test[2])}}" alt="Awesome Image">
                                        </div>
                                        <div class="text-box">
                                            <p>{{$test[0]}}</p>
                                            <div class="quote-icon">
                                                <span class="icon-quote3"></span>
                                            </div>
                                        </div>
                                        <div class="client-info">
                                            <div class="review-box">
                                                <ul>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <h3>{{$test[1]}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Testimonial style2 -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Style2 Area-->

    <!--Start latest blog area style2-->
    <section class="latest-blog-area style2">
        <div class="container inner-content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sec-title float-left">
                        <p>News & Updates</p>
                        <div class="title">Latest Blog</div>
                    </div>
                    <div class="more-blog-button float-right">
                        <a class="btn-two" href="/blog">More News<span class="flaticon-next"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/land.jpg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="#"><span class="flaticon-zoom"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <h3>02 <span>Aug 2024</span></h3>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>

                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-single.php">INVESTING IN LAND</a></h3>
                            <div class="text">
                                <p>Investing in land has been a time-tested strategy for wealth creation and long-term financial security.
                                    Owning a piece of land can offer various benefits, including potential appreciation, a stable investment, and diverse usage options. However, like any investment, it comes with its fair share of risks and considerations. In this blog post, we will explore the pros and cons of investing in land to help you make an informed decision.</p>
                                <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/proper5.jpeg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="#"><span class="flaticon-zoom"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <h3>24 <span>Aug 2024</span></h3>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>

                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="blog-single.php">Property Management</a></h3>
                            <div class="text">
                                <p>Being a landlord can be a rewarding experience, providing a steady source of income and potential
                                    long-term wealth. However, managing rental properties comes with its fair share of challenges,
                                    ranging from tenant relations to property maintenance. As the number of properties and tenants increases,
                                    so does the complexity of the responsibilities. This is where professional property management services
                                    can prove to be invaluable. In this blog post, we will explore the various ways in which hiring
                                    a professional property management company can benefit landlords.</p>
                                <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog post-->
                <!--Start single blog post-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-blog-post wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/first.jpg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="link-icon">
                                        <a href="#"><span class="flaticon-zoom"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <div class="post-date">
                                <h3>18 <span>Aug 2024</span></h3>
                            </div>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="/property">Property Investment Project</a></h3>
                            <div class="text">
                                <p>Becoming a first-time landlord is a significant milestone that brings with it a mix of excitement,
                                    challenges, and opportunities. It's a journey that starts with a vision of building passive income
                                    through real estate investments and evolves into a rewarding experience as landlords navigate tenant
                                    relationships, property management, and financial growth. In this blog post, we'll delve into the life
                                    of a first-time landlord, exploring their experiences, insights, and the valuable lessons they learn
                                    along the way.</p>
                                <a class="btn-two" href="#">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog post-->

            </div>
        </div>
    </section>
    <!--End latest blog area style2-->

    <!--Start Instagram Area-->
    <section class="instagram-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="instagram-title">
                        <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms"></div>
                        <h3>We Give Opportunity Before It Becomes Obvious</h3>
                        <a class="btn-two" href="/blog">Sampesa Group Limited<span class="flaticon-next"></span></a>
                    </div>
                </div>
                <div class="col-xl-8">
                    <ul class="instagram-items clearfix">
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img3.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img3.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img4.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img4.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img5.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img5.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img10.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img10.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img7.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img7.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/resources/img9.jpg')}}" alt="Awesome Image">
                                <div class="overlay-style-two"></div>
                                <div class="overlay">
                                    <div class="box">
                                        <div class="link-icon">
                                            <img src="{{asset('storage/front/images/resources/img9.jpg')}}" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection