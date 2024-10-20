@extends('layouts.app',['title'=>'Archtectural Services'])
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
                        <h1>Drawings And Designs</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="index.php">Home</a></li>

                            <li class="active">Drawings</li>
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
            <div class="col-xl-5">
                <div class="project-description-image-box">
                    <img src="{{asset('storage/front/images/resources/arc.jpg')}}" alt="Awesome Image">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="project-description-content">
                    <div class="sec-title">
                        <p>Drawings And Designs</p>

                    </div>
                    <div class="inner-content">
                        <p>At SAMPESA, we understand the importance of meticulous planning and precise execution in construction projects. Our panel of consultants specializes in preparing all types of construction drawings required by government regulations, including those mandated by the National Construction Authority (NCA) and the National Environmental Management Authority (NEMA).

                            Whether you are planning a residential, commercial, or industrial project, we ensure compliance with all relevant standards and regulations..</p>
                        <div class="bottpm-text">
                            <h1 style="font-size:20px;">Consultancy Fees and Pricing</h1>
                            <p>Our consultancy fees range from 10% to 14% of the total project costs, in accordance with government requirements. Alternatively, if you already have your own drawings, we offer a reduced consultancy fee of 3% for providing a comprehensive report and analysis.</p>

                            <h1 style="font-size:20px;">Software Expertise</h1>
                            <p>We are proficient in utilizing a variety of software tools to create detailed 3D artwork, calculations, and structural designs, ensuring precision and efficiency in our deliverables. Thank you for considering SAMPESA as your partner in achieving your construction goals. We look forward to the opportunity to collaborate on your upcoming projects.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Description area-->

<!--Start Similar projects Area-->
<section class="similar-projects-area">
    <div class="container-fluid similar-projects-content">
        <div class="similar-project-title text-center">
            <h2>Types of Construction Drawings Available in Kenya</h2>
            <p>In Kenya, various types of construction drawings are essential for different stages of a project. Here are the most common types:</p>
        </div>
        <div class="row">
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/ard.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Architectural Drawings</a></h3>
                        <span>These drawings provide detailed plans for the layout, dimensions, and aesthetics of a building or structure. They include floor plans, elevations, sections, and details that guide the overall design and appearance of the project.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/std.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Structural Drawings</a></h3>
                        <span>Structural drawings focus on the framework and support systems of a building, including foundations, columns, beams, and load-bearing walls. They ensure that the structure is sound and meets safety standards.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/eld.png')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Electrical Drawings</a></h3>
                        <span>Electrical drawings outline the wiring, outlets, switches, and lighting fixtures within a building. They ensure that the electrical systems are designed and installed correctly to meet safety and functionality requirements.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/med.png')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Mechanical Drawings</a></h3>
                        <span>Mechanical drawings detail the HVAC (heating, ventilation, and air conditioning) systems, plumbing, and other mechanical components within a building. They ensure proper functionality and efficiency of these systems.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
        </div>

        <div class="row">
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/pd.png')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Plumbing Drawings</a></h3>
                        <span>Plumbing drawings specify the layout and connections of pipes, fixtures, and drainage systems within a building. They ensure proper water supply, waste removal, and sanitation.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/fd.png')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Fire Protection Drawings</a></h3>
                        <span>These drawings outline the fire detection, suppression, and evacuation systems within a building. They ensure compliance with fire safety regulations and protect occupants in case of emergencies.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/ld.jpeg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Landscaping Drawings</a></h3>
                        <span>Landscaping drawings depict the design and layout of outdoor spaces, including gardens, pathways, and amenities. They enhance the aesthetics and functionality of the property's exterior.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <!--Start Single Similar Project-->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="single-similar-project">
                    <div class="img-holder">
                        <img src="{{asset('storage/front/images/projects/project-single/id.jpg')}}" alt="Awesome Image">
                    </div>
                    <div class="title-holder">
                        <h3><a href="#">Interior Design Drawings</a></h3>
                        <span>Interior design drawings focus on the layout, furniture arrangement, and decorative elements within a building's interior spaces. They create cohesive and visually appealing environments that meet the client's needs and preferences.</span>

                    </div>
                </div>
            </div>
            <!--End Single Similar Project-->
            <div class="button" style="align-items:center;">
                <a href="/contact" class="btn-one">Contact us to request this service<span class="flaticon-next"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Similar projects Area-->
@endsection