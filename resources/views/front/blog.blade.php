@extends('layouts.app',['title'=>'Blog'])
@section('content')
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Sampesa Group Blog</span>
                        <h1>Blog</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start blog area-->
<section id="blog-area" class="blog-default-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-colum-style1">
                    <!--Start single blog post-->
                    <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/land.jpg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="post-date">
                                        <h3>Aug <br><span>02</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="/blog/investing-in-land">INVESTING IN LAND</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>

                                </ul>
                            </div>
                            <div class="text">
                                <p>Investing in land has been a time-tested strategy for wealth creation and long-term financial security. Owning a piece of land can offer various benefits,
                                    including potential appreciation, a stable investment, and diverse usage options. However, like any investment, it comes with its fair share of risks and considerations.
                                    In this blog post, we will explore the pros and cons of investing in land to help you make an informed decision..</p>
                                <a class="btn-two" href="/blog/investing-in-land">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-colum-style1">
                    <!--Start single blog post-->
                    <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/proper5.jpeg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="post-date">
                                        <h3>Aug <br><span>24</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="/blog/property-management">Property Management</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>

                                </ul>
                            </div>
                            <div class="text">
                                <p>Being a landlord can be a rewarding experience, providing a steady source of income and potential long-term wealth. However, managing rental properties comes with its fair share of
                                    challenges, ranging from tenant relations to property maintenance. As the number of properties and tenants increases, so does the complexity of the responsibilities. This is where
                                    professional property management services can prove to be invaluable. In this blog post, we will explore the various ways in which hiring a professional property management company
                                    can benefit landlords.</p>
                                <a class="btn-two" href="/blog/property-management">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-blog-colum-style1">
                    <!--Start single blog post-->
                    <div class="single-blog-post style3 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="img-holder">
                            <img src="{{asset('storage/front/images/blog/first.jpg')}}" alt="Awesome Image">
                            <div class="overlay-style-two"></div>
                            <div class="overlay">
                                <div class="box">
                                    <div class="post-date">
                                        <h3>Aug <br><span>18</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><a href="/blog/property-investment-project">Property Investment Project</a></h3>
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>By <a href="#">Sampesa Group</a></li>

                                </ul>
                            </div>
                            <div class="text">
                                <p>Becoming a first-time landlord is a significant milestone that brings with it a mix of excitement, challenges, and opportunities. It's a journey that starts with a vision
                                    of building passive income through real estate investments and evolves into a rewarding experience as landlords navigate tenant relationships, property management,
                                    and financial growth. In this blog post, we'll delve into the life of a first-time landlord, exploring their experiences, insights, and the valuable lessons they learn
                                    along the way.</p>
                                <a class="btn-two" href="/blog/property-investment-project">Read More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                    <!--End single blog post-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End blog area-->
@endsection