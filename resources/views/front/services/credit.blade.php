@extends('layouts.app',['title'=>'Credit Service'])
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                               
                                <h1>Loans / Credit Services</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Credit Services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start credit Area-->
        
             <!--Start credit area -->
        <section class="main-project-area style4">
         
            <div class="container-fluid main-project-style4">
                <div class="row filter-layout masonary-layout">
                    <!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item contem trad">
    <div class="single-project-style7">
        <?php
            $it = 8 * 78839;
        ?>
        <div class="img-holder">
            <img src="../images/propertylo.jpg" alt="Property Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Property Loans</span>
                        <h3><a href="../property_loan.php">8% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php&type=PROPERTY&ref=../loan-security-property.php&it='.$it;}else{echo '../loans/save-loan-type.php?type=PROPERTY&ref=../loan-security-property.php&it='.$it;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../property_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Property Loans</span>
            <h3><a href="../property_loan.php">8% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php&type=PROPERTY&ref=../loan-security-property.php&it='.$it;}else{echo '../loans/save-loan-type.php?type=PROPERTY&ref=../loan-security-property.php&it='.$it;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../property_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item mod ret">
    <div class="single-project-style7">
        <?php
            $pd_i = 5 * 78839;
        ?>
        <div class="img-holder">
            <img src="../images/personalloan.jpg" alt="Personal Deposit Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Personal Deposit Loans</span>
                        <h3><a href="../personal_deposit_loan.php">5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=PERSONAL DEPOSIT&ref=../loan-security-personal-deposit.php&it='.$pd_i;}else{echo '../loans/save-loan-type.php?type=PERSONAL DEPOSIT&ref=../loan-security-personal-deposit.php&it='.$pd_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../personal_deposit_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Personal Deposit Loans</span>
            <h3><a href="../personal_deposit_loan.php">5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=PERSONAL DEPOSIT&ref=../loan-security-personal-deposit.php&it='.$pd_i;}else{echo '../loans/save-loan-type.php?type=PERSONAL DEPOSIT&ref=../loan-security-personal-deposit.php&it='.$pd_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../personal_deposit_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item contem trad">
    <div class="single-project-style7">
        <?php
            $lb_i = 6.5 * 78839;
        ?>
        <div class="img-holder">
            <img src="../images/logbookloan.jpg" alt="Log Book Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Log Book Loans</span>
                        <h3><a href="../log_book_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=LOGBOOK&ref=../loan-security-logbook.php&it='.$lb_i;}else{echo '../loans/save-loan-type.php?type=LOGBOOK&ref=../loan-security-logbook.php&it='.$lb_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../log_book_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Log Book Loans</span>
            <h3><a href="../log_book_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=LOGBOOK&ref=../loan-security-logbook.php&it='.$lb_i;}else{echo '../loans/save-loan-type.php?type=LOGBOOK&ref=../loan-security-logbook.php&it='.$lb_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../log_book_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item mod ret">
    <div class="single-project-style7">
        <?php
            $psl_i = 3.5 * 78839;
        ?>
        <div class="img-holder">
            <img src="../images/payslip.jpg" alt="Pay Slip (Salary) Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Pay Slip (Salary) Loans</span>
                        <h3><a href="../pay_slip_loan.php">3.5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=PAYSLIP&ref=../loan-security-payslip.php&it='.$psl_i;}else{echo '../loans/save-loan-type.php?type=PAYSLIP&ref=../loan-security-payslip.php&it='.$psl_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../pay_slip_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Pay Slip (Salary) Loans</span>
            <h3><a href="../pay_slip_loan.php">3.5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=../loans/save-loan-type.php?type=PAYSLIP&ref=../loan-security-payslip.php&it='.$psl_i;}else{echo '../loans/save-loan-type.php?type=PAYSLIP&ref=../loan-security-payslip.php&it='.$psl_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../pay_slip_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item mod ret">
    <div class="single-project-style7">
        <?php
           $hh_i = 8 * 78839;
        ?>
        <div class="img-holder">
            <img src="../images/household.jpg" alt="household Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>House Hold Items Loans</span>
                        <h3><a href="../pay_slip_loan.php">8% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=loans/../save-loan-type.php?type=household&ref=../loan-security-household.php&it='.$hh_i;}else{echo '../loans/save-loan-type.php?type=household&ref=../loan-security-household.php&it='.$hh_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../house_hold_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>House Hold Items Loans</span>
            <h3><a href="../pay_slip_loan.php">8% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0){echo '../registration.php?token=loans/../save-loan-type.php?type=household&ref=../loan-security-household.php&it='.$hh_i;}else{echo '../loans/save-loan-type.php?type=household&ref=../loan-security-household.php&it='.$hh_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../house_hold_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->
<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item contem trad">
    <div class="single-project-style7">
        <?php $stb_i = 6.5 * 78839; ?>
        <div class="img-holder">
            <img src="../images/bond.jpg" alt="Stock & Bonds Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Stock & Bonds Loans</span>
                        <h3><a href="../stock_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=STOCKS & BONDS&ref=../loan-security-stocks-bonds.php&it='.$stb_i;}else{echo '../loans/save-loan-type.php?type=STOCKS & BONDS&ref=../loan-security-stocks-bonds.php&it='.$stb_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../stock_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Stock & Bonds Loans</span>
            <h3><a href="../stock_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=STOCKS & BONDS&ref=../loan-security-stocks-bonds.php&it='.$stb_i;}else{echo '../loans/save-loan-type.php?type=STOCKS & BONDS&ref=../loan-security-stocks-bonds.php&it='.$stb_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../stock_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item mod ret">
    <div class="single-project-style7">
        <?php $lfi_i = 6.5 * 78839; ?>
        <div class="img-holder">
            <img src="../images/life.jpg" alt="Life Insurance Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Life Insurance Loans</span>
                        <h3><a href="../life_insurance_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=LIFE INSURANCE&ref=../loan-security-life-insurance.php&it='.$lfi_i;}else{echo '../loans/save-loan-type.php?type=LIFE INSURANCE&ref=../loan-security-life-insurance.php&it='.$lfi_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../life_insurance_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Life Insurance Loans</span>
            <h3><a href="../life_insurance_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=LIFE INSURANCE&ref=../loan-security-life-insurance.php&it='.$lfi_i;}else{echo '../loans/save-loan-type.php?type=LIFE INSURANCE&ref=../loan-security-life-insurance.php&it='.$lfi_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../life_insurance_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->

<!-- Start single project item -->
<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 filter-item contem trad">
    <div class="single-project-style7">
        <?php $psg_i = 6.5 * 78839; ?>
        <div class="img-holder">
            <img src="../images/guarantor.jpg" alt="Personal Guarantor Loans">
            <div class="overlay-content">
                <div class="inner-content">
                    <div class="title-box">
                        <span>Personal Guarantor Loans</span>
                        <h3><a href="../personal_guarantor_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=PERSONAL GUARANTEE&ref=../loan-security-personal-guarantee.php&it='.$psg_i;}else{echo '../loans/save-loan-type.php?type=PERSONAL GUARANTEE&ref=../loan-security-personal-guarantee.php&it='.$psg_i;} ?>">APPLY &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="../personal_guarantor_loan.php">READ MORE &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <span>Personal Guarantor Loans</span>
            <h3><a href="../personal_guarantor_loan.php">6.5% Monthly for 3 to 24 Months</a></h3>
            <a class="btn btn-primary btn-sm" target="_top" href="<?php session_start(); if($_SESSION['client'] == '' || $_SESSION['client'] == 0 ){echo '../registration.php?token=../loans/save-loan-type.php?type=PERSONAL GUARANTEE&ref=../loan-security-personal-guarantee.php&it='.$psg_i;}else{echo '../loans/save-loan-type.php?type=PERSONAL GUARANTEE&ref=../loan-security-personal-guarantee.php&it='.$psg_i;} ?>">APPLY &raquo;</a>
            <a class="btn btn-primary btn-sm" target="_top" href="../personal_guarantor_loan.php">READ MORE &raquo;</a>
        </div>
    </div>
</div>
<!-- End single project item -->



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-project-style4-button text-center">
                            <a class="btn-one" href="project.html">Load More<span class="flaticon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Main project area style4-->
        
       
      




       
        <!--End credit Area-->

         <!--Start footer area Style4-->
   
 <?php include('includes/footer.php'); ?>
 

        <!--End footer area-->

    </div>


    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>



    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>

    <script src="js/map-helper.js"></script>

    <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/timepicker/timePicker.js"></script>
    <script src="assets/html5lightbox/html5lightbox.js"></script>

    <!--Revolution Slider-->
    <script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/main-slider-script.js"></script>

    <!-- thm custom script -->
    <script src="js/custom.js"></script>



</body>


<!-- 404-page 06:47:00 GMT -->
</html>