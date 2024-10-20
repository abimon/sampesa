@extends('layouts.app',['title'=>'Terms and Conditions'])
@section('content')
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Terms and Conditions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<section>
<div id="page-wrapper">
    <div style="padding-top:80px">

        <div style="margin-left:30px; padding:25px; border: 2px solid black; border-radius: 20px; background: rgb(238,174,202); background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(194,228,233,1) 0%);">
            <h4 style="font-weight: bold; font-family: sans-serif; color: blue; font-size: 25px ; padding-top: 20px;">
                Terms And Conditions.
            </b></p>
            <hr>
            <!--<p>Last updated: [Date]</p>-->
            <h3>1. Introduction</h3>
            <p>Welcome to Sampesa Group Limited. These terms and conditions outline the rules and regulations for the use of Sampesa's website and services.</p>
            <h3>2. General Terms</h3>
            <p>By accessing this website and using our services, you accept these terms and conditions in full. Do not continue to use Sampesa's website if you do not accept all of the terms and conditions stated on this page.</p>
            <h3>3. Property Development Services</h3>
            <p>Sampesa offers property development services, including but not limited to project planning, construction, and management. All services are subject to the terms outlined in individual contracts with clients.</p>

            <p><b>3.1 Project Planning</b></p>
            <p>We assist in the planning of property development projects, including feasibility studies, site assessments, and budgeting.</p>

            <p><b>3.2 Construction</b></p>
            <p>Our construction services include overseeing the building process, ensuring compliance with regulations, and managing subcontractors.</p>

            <p><b>3.3 Management</b></p>
            <p>We provide ongoing management services for property development projects, including quality control and project delivery.</p>

            <h3>4. Loan Services</h3>
            <p>Sampesa provides loan services to individuals and businesses for property development projects. Loan agreements are subject to approval and specific terms outlined in individual loan contracts.</p>

            <p><b>4.1 Loan Application</b></p>
            <p>Applicants must provide accurate and complete information during the loan application process. Misrepresentation may result in the denial of the loan application.</p>

            <p><b>4.2 Loan Approval</b></p>
            <p>Loan approval is at the discretion of [Company Name]. Terms and interest rates will be provided upon approval.</p>

            <p><b>4.3 Loan Repayment</b></p>
            <p>Borrowers must adhere to the repayment schedule as outlined in the loan agreement. Failure to repay may result in penalties and legal action.</p>

            <h3>5. User Responsibilities</h3>
            <p>Users are responsible for maintaining the confidentiality of their account information and for all activities that occur under their account. Users must notify [Company Name] immediately of any unauthorized use of their account.</p>

            <h3>6. Limitation of Liability</h3>
            <p>Sampesa will not be liable for any damages that arise from the use or inability to use our services, including but not limited to direct, indirect, incidental, punitive, and consequential damages.</p>

            <h3>7. Changes to Terms and Conditions</h3>
            <p>Sampesa reserves the right to revise these terms and conditions at any time. Changes will be posted on this page, and users are encouraged to review this page regularly.</p>

            <h3>8. Contact Information</h3>
            <p>If you have any questions about these terms and conditions, please contact us at:</p>
            <p>
                <i class="fa-solid fa-location-dot"></i>
                <b>Address:</b>
                <br>Global Trade Center(GTC) 14th floor
                <br>Intersection of Waiyaki Way and Chiromo Lane, Westlands
                <br>Nairobi, Kenya<br>

                <b>Contacts:</b>
                <br>(+254) 0726 717 120
                <br>(+254) 0724 062 218<br>

                <b>Email:</b> <br>info@sampesagroup.com
            </p>
        </div>
    </div>
</div>
</section>
@endsection