@extends('layouts.app',['title'=>'Projects'])
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>Sampesa Group Limited</span>
                            <h1>Projects</h1>
                        </div>
                        <div class="breadcrumb-menu float-left">
                            <ul class="clearfix">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Recently Project style2 Area-->
    <section class="recently-project-style2-area">
        <div class="container">
            <div class="sec-title text-center">
                <p>Projects</p>
                <div class="title">Recently Completed <span>Works</span></div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-carousel-v2 owl-carousel owl-theme">
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/projects/ren.jpg')}}" alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span style="color: rgb(19, 209, 44);">Sampesa Group Ltd</span>
                                    <h3>Rental Residential</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/projects/com.jpeg')}}" alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span style="color: rgb(19, 209, 44);">Sampesa Group Ltd</span>
                                    <h3>Commercial (Offices, Shops, Warehouses, etc.)</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->
                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/projects/occ.jpeg')}}" alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span style="color: rgb(19, 209, 44);">Sampesa Group Ltd</span>
                                    <h3>Owner Occupier</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->

                        <!--Start single project style1-->
                        <div class="single-project-style2">
                            <div class="img-holder">
                                <img src="{{asset('storage/front/images/projects/combination.jpeg')}}" alt="Awesome Image">
                                <div class="read-more">
                                    <a href="#"><span class="icon-next"></span></a>
                                </div>
                                <div class="title-box">
                                    <span style="color: rgb(19, 209, 44);">Sampesa Group Ltd</span>
                                    <h3>Combination of Rental Residential and Commercial</h3>
                                </div>
                            </div>
                        </div>
                        <!--End single project style1-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Recently Project style2 Area-->
@endsection