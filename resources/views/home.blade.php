@extends('layouts.app',['title'=>'Home'])
@section('content')
<div>
    <audio autoplay>
        <source src="sam.mp3" type="audio/mpeg">
    </audio>
    <div class="banner_top" id="home">
        <div data-vide-bg="{{asset('storage/video/real_estate')}}">

            <div class="center-container" style="margin-top:0px;padding-top:0px;">
                <!--/slider-->
                <div class="banner_wthree_agile_info">
                    <div class="slider">
                        <div class="callbacks_container">
                            <ul class="rslides callbacks callbacks1" id="slider4">
                                <li>
                                    <div class="agileits-banner-info">
                                        <h4>Welcome to</h4>
                                        <h3 style="font-size:6vw;">Sampesa Group Ltd</h3>
                                        <p></p>
                                        <div class="more">
                                            
                                            <a href="#" data-toggle="modal" data-target="#appointmentModal" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Book Appointment</a>
                                            <a href="tell-us-your-need.php" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Enquire About a Service</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h4>Our motto is</h4>
                                        <h3 style="font-size: 4vw;">"We give opportunity before it becomes obvious."</h3>
                                        <p></p>
                                        <div class="more">
                                            <a href="#" data-toggle="modal" data-target="#appointmentModal" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Book Appointment</a>
                                            <a href="tell-us-your-need.php" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Enquire About a Service</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="agileits-banner-info">
                                        <h4>Our Values</h4>
                                        <h3 style="font-size: 4vw;">"Integrity, Reliability & Quality"</h3>
                                        <p></p>
                                        <div class="more">
                                            <a href="#" data-toggle="modal" data-target="#appointmentModal" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Book Appointment</a>
                                            <a href="tell-us-your-need.php" class="btn-blink" style="text-decoration:none;color: #528ac5;padding:10px 20px 10px 20px;">Enquire About a Service</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--//slider-->
            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-7 banner_bottom_left">
                    <h2 class="title-w3-agileits one">Welcome To Sampesa Group Limited!</h2>
                    <p style="padding-top: 20px; margin-bottom: 15px;font-size:15px;line-height:30px;opacity:0.8;"><b style="font-size:150%;">S</b>ampesa Group Limited is a registered firm in Kenya that deals with Property Development and Real Estates investment/ Management. The company has the following Departments namely:-</p>

                    <ul class="list-unstyled" style="padding-left: 30px; padding-bottom: 15px;font-size:15px;line-height:30px;">
                        <li><span class="fa fa-check-circle text-primary"></span> Property Development Department.</li>
                        <li><span class="fa fa-check-circle text-primary"></span> Asset Valuation Department.</li>
                        <li><span class="fa fa-check-circle text-primary"></span> Property/Asset Management Department.</li>
                        <li><span class="fa fa-check-circle text-primary"></span> Arch works Department.</li>
                        <li><span class="fa fa-check-circle text-primary"></span> Credit/Loans Department.</li>
                        <li><span class="fa fa-check-circle text-primary"></span> Property Value Addition Department.</li>
                    </ul>
                </div>
                <div class="col-md-5 banner_bottom_right">
                    <div class="img_agile" style="height:auto; width:100%;">
                        <img src="{{asset('storage/images/sam9.jpg')}}" class="img-responsive" alt="" />

                        <div class="text" style="margin-top: -50px;width: 90%; height: 100px; position:absolute; background: rgba(0, 0, 0, 0.6); left: 20px; margin-right: 30px; top: 100%;border-radius:1%;">
                            <h5 style="color:white;padding:5px;">Director Sampesa Group Ltd</h5>
                            <p style="color: white;padding:5px;"><i>" We take opportunity before it becomes obvious "</i>~ Director </p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align:center; align-items:center;">
                <p style="font-size:15px;line-height:30px;">
                    Our Company started in year 2003 being incorporated in 2009 and in conjunction with contractors and investors, it has been able to provide opportunity to property and land owners with big dreams of owning rental houses to achieve them via this program. Our goal is to exceed the expectations of every client by offering outstanding customer service, increased flexibility, and greater value, thus optimizing system functionality and improving operation efficiency.</p>
                <br><br>
                <div class="more wthree_more1 ">
                    <a href="about.php" class="hvr-shutter-in-vertical">Read More<span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
            </div>

            <div class="container-fluid" style="background: #87bbf8; margin-top: 2em; border-radius: 10px;">
                <div class="grids-w3l" style="padding-top: 2em;">
                    <div class="grids-agile" style="padding-top: 1em;">
                        <h2 class="title-w3-agileits one" style="font-size: 200%;">Book an appointment with us <a href="#" data-toggle="modal" data-target="#appointmentModal" class="btn-blink" style="color: #528ac5;">here</a>.</h2>

                        <!-- Appointment Modal -->
                        <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title text-center" id="appointmentModalLabel" style="padding-top: 1em; font-weight: bold;">Questions? Schedule an Appointment for any questions or concerns.</h4>
                                    </div>
                                    <form style="padding: 25px;" action="" method="post">

                                        <div class="modal-body">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="name">Name</label>
                                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="phone-number">Phone Number</label>
                                                        <input id="phone-number" name="phone_number" type="number" placeholder="Phone Number" class="form-control input-md" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="email">Your Email</label>
                                                        <input id="phone-number" name="email" type="email" placeholder="Phone Number" class="form-control input-md" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="time">Preferred Date and Time</label>
                                                        <input type="datetime-local" class="form-control input-md" name="appointment_date" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="time">Are you a new or a registered client</label>
                                                        <select class="form-control input-md" name="client_type" id="mySelect" required>
                                                            <option value="">Select</option>
                                                            <option value="New Client">New Client</option>
                                                            <option value="Existing Client">Existing Client</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-6" id="id-no-new-client" style="display:none;">
                                                    <div class="form-group">
                                                        <label class="control-label" for="time">What is Your ID Number</label>
                                                        <input type="number" class="form-control input-md" name="id_no" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="time">Select Office/Department You would like to see</label>
                                                        <select class="form-control input-md" name="appointment_target" required>
                                                            <option value="">Select</option>
                                                            <option value="Sales">Sales / Business Development Department</option>

                                                            <option value="Project Management Department">Project Management Department</option>

                                                            <option value="Customer Service">Customer Service </option>

                                                            <option value="Estimation Department">Estimation Department</option>

                                                            <option value="Drawings or Engineering Department">Drawings or Engineering Department</option>

                                                            <option value="Director">Director's Office</option>

                                                            <option value="Finance">Finance Office</option>

                                                            <option value="Procurement">Procurement Office</option>

                                                            <option value="C.E.O">C.E.O</option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="message">Kindly Describe Your Concerns</label>
                                                        <textarea class="control-label form-control" name="appointment_message" id="message" placeholder="Write a brief message explaining your question and concern" required></textarea>
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="submit_appointment">Make An Appointment</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="banner_bottom_agile_grids">
                    <div class="row">
                        <a class="col-md-3 col-xs-6 text-decoration-none" href="project-category.php" target="_top">
                            <div class="bannebottom_right_grid" style="margin-bottom:1em;padding:2px;">
                                <div class="view view-tenth" style="padding-top:2em;">
                                    <div class="agile_text_box">
                                        <i class="fa fa-briefcase fa-3x" aria-hidden="true"></i>
                                        <h3> Our Projects</h3>
                                        <p>See our new, ongoing and completed projects</p>
                                    </div>
                                    <div class="mask">
                                        <img style="object-fit: cover; height: 250px; width: 100%;" src="{{asset('storage/images/proj1.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-3 col-xs-6 text-decoration-none" href="about.php" target="_top">
                            <div class="bannerbottom_right_grid" style="margin-bottom:1em;padding:2px;">
                                <div class="view view-tenth" style="padding-top:2em;">
                                    <div class="agile_text_box">
                                        <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                                        <h3> Our Partners</h3>
                                        <p>Become a partner by investing with us.</p>
                                    </div>
                                    <div class="mask">
                                        <img style="object-fit: cover; height: 250px; width: 100%;" src="{{asset('storage/images/samlogo.png')}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="col-md-3 col-xs-6 text-decoration-none" href="services.php" target="_top">
                            <div class="bannerbottom_right_grid" style="margin-bottom:1em;padding:2px;">
                                <div class="view view-tenth" style="padding-top:2em;">
                                    <div class="agile_text_box">
                                        <i class="fa fa-cogs fa-3x" aria-hidden="true"></i>
                                        <h3>Our Services </h3>
                                        <p>Check out the services we provide.</p>
                                    </div>
                                    <div class="mask">
                                        <img style="object-fit: cover; height: 250px; width: 100%;" src="{{asset('storage/images/sam2.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-3 col-xs-6 text-decoration-none" href="blog.php">
                            <div class="bannerbottom_right_grid" style="margin-bottom:1em;padding:2px;">
                                <div class="view view-tenth" style="padding-top:2em;">
                                    <div class="agile_text_box">
                                        <i class="fa fa-comments fa-3x" aria-hidden="true"></i>
                                        <h3>Our Blog</h3>
                                        <p>Find What people are saying about us or join a discussion</p>
                                    </div>
                                    <div class="mask">
                                        <img style="object-fit: cover; height: 250px; width: 100%;" src="{{asset('storage/images/sam4.jpg')}}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-bottom -->
    <div>
        <div class="services" style="background: #87bbf8;">
            <div class="container">
                <h3 class="title-w3-agileits two">Our Services</h3>
                <p class="quia">What We Do</p>
                <div class="wthree_services_bottom_left banner_bottom_agile_grids">
                    <div class="row d-flex justify-content-center">
                        <a class="col-md-4 text-decoration-none" href="credit_services.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/personal5.jpg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Credit/Loan Services</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile two">
                                    <h4>Credit/ Loan Services</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="properties.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/proj2.jpg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Property Development</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile two">
                                    <h4>Property Development </h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="asset_valuation.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/value7.jpeg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Property/Asset Valuation</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile two">
                                    <h4>Asset Valuation</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="asset_valuation.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/value7.jpeg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Property/Asset Valuation</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile two">
                                    <h4>Asset Valuation</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="property_management.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/proper5.jpeg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Property/Asset Management</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile">
                                    <h4>Asset Management</h4>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="archworks.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/archi5.jpg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Architectural Designs</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile">
                                    <h4>Archworks</h4>

                                </div>
                            </div>
                        </a>
                        <a class="col-md-4 text-decoration-none" href="property-value-addition.php">
                            <div class="w3_agileits_services_bottom_l_grid">
                                <div class="agile_services_bottom_l_grid1">
                                    <img src="{{asset('storage/images/value6.jpg')}}" alt=" " class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;" />
                                    <div class="w3_service_bottom_grid_pos">
                                        <h3 style="line-height: 2;">Property Value Addition</h3>
                                    </div>
                                </div>
                                <div class="serve_info_agile">
                                    <h4>Property Value Addition</h4>

                                </div>
                            </div>
                        </a>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- grids -->
    <div class="grids-w3l">
        <div class="row p-5">
            <div class="col-md-6">
                <h3 class="title-w3-agileits one">Become one of our Client or Investor</h3>
                <p class="mt-3">At Sampesa Group Ltd we are excited to have the opportunity to work with you on your investment journey. Our extensive experience and knowledge in the real estate market allows us to provide you with expert guidance and support throughout your investment journey.
                </p>
                <p>Our goal is to help you grow your wealth without breaking a sweat, so you can enjoy the benefits of real estate investments with ease.</p>
                <p>We look forward to working with you and helping you grow your wealth through real estate investments.</p>

                <div class="w3lsstatsaits-info">
                    <div class="more wthree_more1 justify-content-between">
                        <a href="registration.php" class="hvr-shutter-in-vertical" style="margin-right: 100px; margin-bottom: 20px; text-decoration:none;"><span class="fa fa-sign-in"></span> Client Registration</a>
                        <a href="" class="hvr-shutter-in-vertical" style="margin-bottom: 20px; text-decoration:none;"><span class="fa fa-sign-in"></span> Investor Registration</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6">

                <h3 class="title-w3-agileits one">Send Us a Message</h3>
                <hr>
                <div class="thumbail">
                    <div class="form-group mb-2">
                        <label>Enter Your names</label>
                        <input type="text" name="" class="form-control" placeholder="Your Names">
                    </div>

                    <div class="form-group mb-2">
                        <label>Enter Your Email</label>
                        <input type="text" name="" class="form-control" placeholder="Your Names">
                    </div>

                    <div class="form-group mb-2">
                        <label>Enter Your Phone Number</label>
                        <input type="text" name="" class="form-control" placeholder="Your Names">
                    </div>

                    <div class="form-group mb-2">
                        <label>Enter Your Message</label>
                        <textarea class="form-control" placeholder="type your message...."></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success " style="background-color: #528ac5;"><b class="fa fa-paper-plane"></b> Send message now </button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>

    </div>
    <!-- //grids -->

    @endsection