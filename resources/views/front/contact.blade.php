@extends('layouts.app',['title'=>'Contact'])
@section('content')
  <!--end-->
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Sampesa Group Limited</span>
                                <h1>Contact Us</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

      <!--Start Contact details Area-->
        <section class="contact-details-area">
            <div class="sec-title text-center">
                <p>Contact Us</p>
                <div class="title">How Can We <span>Help You?</span></div>
            </div>
            <div class="parallax-background" style="background-image:url(images/parallax-background/contact-details-bg.html);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-details-content">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="content-info-box" style="background-image:url(images/parallax-background/gtc2.jpg);">
                                        <div class="inner-content">
                                            <div class="inner">
                                                <div class="single-info-box wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms" style="width: 100%; height: 150px;">
                                                   
                                                    <div class="text">
                                                        <h3>Visit Our Office</h3>
                                                        <p>Global Trade Center(GTC) 14th floor, Westlands, Nairobi</p>
                                                    </div>
                                                </div>
                                                <div class="fadeInUp" data-wow-delay="100ms" data-wow-duration="1200ms" style="height: 370px;">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.30229418104116!2d36.80836374419173!3d-1.2709844117745908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f176ceaf30a91%3A0x6e99c375b66381be!2sGlobal%20Trade%20Center%20Office%20Tower!5e0!3m2!1sen!2snl!4v1706770477038!5m2!1sen!2snl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="contact-details-form-box">
                                        <div class="title-box">
                                            <h2>If you have any questions please fell free to contact with us</h2>
                                        </div>
                                        <div class="contact-details-box">
                                            <form class="contact-details-form">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="single-box">
                                                            <input type="text" name="form_name" value="" placeholder="Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="single-box">
                                                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <input type="text" name="subject" value="" placeholder="Subject" required="">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <textarea name="form_request" placeholder="Message" required="" style="width: 500px;"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="single-box">
                                                            <button class="btn-one" type="submit">Send Message<span class="flaticon-next"></span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="single-info-box wow fadeInDown" data-wow-delay="100ms" data-wow-duration="1200ms" style="width: 400px; height: 150px;">
                                                   <br>
                                            <div class="text">
                                                
                                                    <ul style="list-style: none; padding: 0; margin: 0; text-align: center;">
                                                        <li style="margin-bottom: 10px;">
                                                      
                                                            <a href="mailto:info@sampesagroup.com" style="color: #000; text-decoration: none; margin-left: 8px; font-size: 25px; font-weight: 700;">info@sampesagroup.com</a>
                                                        </li>
                                                        <li style="margin-bottom: 10px;">
                                                           
                                                            <a href="tel:+254724062218" style="color: #000; text-decoration: none; margin-left: 8px; font-size: 25px; font-weight: 700;">+254 724 062 218</a>
                                                        </li>
                                                        <li>
                                                           
                                                            <a href="tel:+254726717120" style="color: #000; text-decoration: none; margin-left: 8px; font-size: 25px; font-weight: 700;">+254 726 717 120</a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Contact details Area-->
@endsection