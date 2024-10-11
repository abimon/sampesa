<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>SAMPESA GROUP LTD | {{$title}}</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{asset('storage/front/css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('storage/front/css/responsive.css')}}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage/front/images/favicon/favicon.ico')}}">
    <link rel="icon" type="image/png" href="{{asset('storage/front/images/favicon/favicon.ico')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('storage/front/images/favicon/favicon.ico')}}" sizes="16x16">

</head>

<body>
    <div class="boxed_wrapper">
        <!--header-->
        <div class="preloader"></div>

        <!-- Start Top Bar style2 -->
        <section class="top-bar-style2">
            <div class="top-style2 clearfix">
                <div class="top-style2-left">

                    <ul>
                        <li>+254 724 062 218 | +254 726 717 120</li>
                        <li>info@sampesagroup.com</li>
                        <li>Mon - Sat: 9am to 5pm</li>
                    </ul>
                </div>

            </div>
        </section>
        <!-- End Top Bar style2 -->

        <!--Start Main Header-->
        <header class="main-header header-style2 stricky">
            <div class="inner-container clearfix">
                <div class="logo-box-style2 float-left">
                    <a href="index.php" style="font-weight: 700; font-size: 15px;">
                        <img src="{{asset('storage/front/images/resources/saml.png')}}" alt="Logo">
                        SAMPESA GROUP LTD
                    </a>
                </div>
                <div class="main-menu-box float-right">
                    <nav class="main-menu style2 clearfix">
                        <div class="navbar-header clearfix">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a>

                                </li>
                                <li class="dropdown"><a href="/#about">About Us</a>
                                    <ul>
                                        <li><a href="/#about">About Company</a></li>
                                        <li><a href="/career">Career</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/tenders">Tender</a></li>
                                        <li><a href="/store">Store</a></li>

                                    </ul>
                                </li>
                                <li><a href="/services">Services</a>
                                    <!-- <li class="dropdown"><a href="/services">Services</a> -->
                                    <!-- <ul>

                                        <li><a href="/property_development">Property Development</a></li>
                                        <li><a href="/credit">credit Services/ Loans</a></li>
                                        <li><a href="/drawing">Architectural Drawings</a></li>
                                        <li><a href="/court">Court Bails including Sureties</a></li>
                                        <li><a href="/collateral">Collateral Guarantee</a></li>
                                        <li><a href="/property-management">Property Management</a></li>
                                        <li><a href="/value-addition">Property Value Addition</a></li>
                                        <li><a href="/valuation">Asset Valuation</a></li>
                                        <li><a href="/biogas">Bio Gas Installation</a></li>
                                        <li><a href="/borehole">Borehole Drilling Services</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="/projects">Projects</a></li>
                                <li><a href="/investor">Investor</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li>
                                    <div class="button">
                                        <a class="btn-one" href="/login">Login<span class="flaticon-next"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--End Main Header-->
        <div class="container">
            @yield('content')
        </div>
        <!--end-->

        <!--End Instagram Area-->
        <!--book appoinment modal start-->
        <div class="grids-w3l text-center mt-2 mb-2">
            <div class="grids-agile" style="padding-top: 1em;">
                <div class="button">
                    <a class="btn-one" href="" data-toggle="modal" data-target="#appointmentModal">Book Appointment<span class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
        <!-- Appointment Modal -->
        <div class="mt-5 p-3 modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel"
            aria-hidden="true">
            <form style="padding: 25px;" action="" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title text-center" id="appointmentModalLabel" style="padding-top: 1em; font-weight: bold;">Questions? Schedule an Appointment for any questions or concerns.</h4>
                        </div>
                        <div class="modal-body m-2">
                            <div class="row mb-2">
                                <label class="col-md-4" for="name">Name</label>
                                <input id="name" name="name" type="text" placeholder="Name" class="col-md-8 form-control input-md" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="phone-number">Phone Number</label>
                                <input id="phone-number" name="phone_number" type="number" placeholder="Phone Number" class="col-md-8 form-control input-md" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="email">Your Email</label>
                                <input id="email" name="email" type="email" placeholder="Email" class="col-md-8 form-control input-md" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="time">Preferred Date </label>
                                <input type="date" class="col-md-8 form-control input-md" name="appointment_date" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="time">Preferred Time </label>
                                <input type="time" class="col-md-8 form-control input-md" name="appointment_time" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="client">Are you a new or a registered client</label>
                                <select class="col-md-8 form-control input-md" name="client_type" id="mySelect" required>
                                    <option selected disabled>Are you a new or a registered client</option>
                                    <option value="New">New Client</option>
                                    <option value="Existing">Existing Client</option>
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="id">What is Your ID Number</label>
                                <input type="number" placeholder="ID Number" class="col-md-8 form-control input-md" name="id_no" required>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-4" for="time">Select Office/Department You would like to see</label>
                                <select class="col-md-8 form-control input-md" name="appointment_target" required>
                                    <option value="">Select Office/Department</option>
                                    <option value="Sales">Sales / Business Development Department</option>

                                    <option value="Project Management Department">Project Management Department</option>

                                    <option value="Customer Service">Customer Service </option>

                                    <option value="Estimation Department">Estimation Department</option>

                                    <option value="Drawings or Engineering Department">Drawings or Engineering Department</option>

                                    <option value="Director">Director's Office</option>

                                    <option value="Finance">Finance Office</option>

                                    <option value="Procurement">Procurement Office</option>
                                    <option value="Operational Manager">Operational Manager</option>

                                    <option value="C.E.O">C.E.O</option>

                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label class="control-label" for="message">Kindly Describe Your Concerns</label>
                                <textarea class="control-label form-control" name="appointment_message" id="message" placeholder="Write a brief message explaining your question and concern" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit_appointment">Make An Appointment</button>
                            </div>
                        </div>
                        <script>
                            // Get references to the select element and the div
                            var selectElement = document.getElementById("mySelect");
                            var hiddenDiv = document.getElementById("id-no-new-client");

                            // Attach a change event listener to the select element
                            selectElement.addEventListener("change", function() {
                                // Check if the selected value is "option2"
                                if (selectElement.value === "Existing Client") {
                                    // If "option2" is selected, show the div
                                    hiddenDiv.style.display = "block";
                                } else {
                                    // If any other option is selected, hide the div
                                    hiddenDiv.style.display = "none";
                                }
                            });
                        </script>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navLinks = document.querySelector(".nav-links");
        const links = document.querySelectorAll(".nav-links li");

        hamburger.addEventListener('click', () => {
            //Animate Links
            navLinks.classList.toggle("open");
            links.forEach(link => {
                link.classList.toggle("fade");
            });

            //Hamburger Animation
            hamburger.classList.toggle("toggle");
        });
    </script>
    <!--Start footer area Style4-->
    <footer class="footer-area style4">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="single-footer-widget marbtm50-s4">
                        <div class="our-info-box">
                            <div class="footer-logo">
                                <a href="index.php">
                                    <img src="{{asset('storage/front/images/resources/saml.png')}}" alt="Awesome Logo" style="width: 70px;">
                                </a>
                            </div>
                            <div class="text">
                                <p>Our extensive experience and knowledge in the real estate market allows us to provide you with expert guidance and support throughout your investment journey.

                                    Our goal is to help you grow your wealth without breaking a sweat, so you can enjoy the benefits of real estate investments with ease.</p>
                            </div>
                            <div class="follow-us-social-links clearfix">
                                <span>Follw Us On:</span>
                                <ul>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Twitter</a></li>
                                    <li><a href="#">Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="single-footer-widget s4">
                        <div class="title-style2">
                            <h3>Usefull Links</h3>
                        </div>
                        <div class="usefull-links">
                            <ul class="float-left">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Projects</a></li>
                                <li><a href="#">Get a Quote</a></li>
                            </ul>
                            <ul class="float-left borders-left">
                                <li><a href="#">News</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
                    <div class="single-footer-widget pdtop50-s4">
                        <div class="title-style2">
                            <h3>Subscribe Us</h3>
                        </div>
                        <div class="subscribe-box">
                            <form class="subscribe-form" action="#">
                                <input type="email" name="email" placeholder="Your Email">
                                <button class="btn-one" type="submit">Subscribe<span class="flaticon-next"></span></button>
                            </form>
                            <div class="text">
                                <p>Subscribe us and get latest news and updates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->
            </div>
        </div>

        <!--End footer area style4-->

        <!--Start Footer Contact Info Area-->
        <section class="footer-contact-info-area mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="footer-contact-info clearfix">
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-global"></span>
                                        </div>
                                        <div class="text">
                                            <p>Global Trade Center(GTC) <br> 14th floor Westlands, Nairobi</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-support1"></span>
                                        </div>
                                        <div class="text">
                                            <p>0724062218 | 0726717120 <br> <span>Mon - Friday:</span> 9.00am to 5.00pm</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-contact-info">
                                    <div class="inner">
                                        <div class="icon">
                                            <span class="icon-shipping-and-delivery"></span>
                                        </div>
                                        <div class="text">
                                            <p>info@sampesagroup.com</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
    <script src="{{asset('storage/front/js/jquery.js')}}"></script>
    <script src="{{asset('storage/front/js/appear.js')}}"></script>
    <script src="{{asset('storage/front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('storage/front/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('storage/front/js/isotope.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.enllax.min.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('storage/front/js/jquery.paroller.min.js')}}"></script>
    <script src="{{asset('storage/front/js/owl.js')}}"></script>
    <script src="{{asset('storage/front/js/validation.js')}}"></script>
    <script src="{{asset('storage/front/js/wow.js')}}"></script>
    <script src="{{asset('storage/front/js/map-helper.js')}}"></script>
    <script src="{{asset('storage/front/assets/language-switcher/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('storage/front/assets/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('storage/front/assets/html5lightbox/html5lightbox.js')}}"></script>
    <!--Revolution Slider-->
    <script src="{{asset('storage/front/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('storage/front/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('storage/front/js/main-slider-script.js')}}"></script>

    <!-- thm custom script -->
    <script src="{{asset('storage/front/js/custom.js')}}"></script>



</body>


<!-- index-2 06:43:55 GMT -->

</html>