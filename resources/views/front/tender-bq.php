<?php include('../tender-controls.php'); ?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>Sampesa Group Ltd - Tenders</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">

         <!--header-->
 <?php include('includes/header.php'); ?>
 
  <!--end-->

        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                               
                                <h1>Tender</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Tenders</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

	
	
				<!-- top_header_agile_info_w3ls -->
		<div style="position:relative; padding-top:1em;">
		    <img src="images/spinner.gif" style="position:absolute;top:10px; left:43%; right:43%;width:100px;z-index:-1;">
		
    		<div class="container" style="margin: 1em auto; margin-top:130px; ">
    		    <div class="row">
        		    
        		    <div class="col-md-10 col-xs-9">
        		    <?php read_tender_bq(); ?> 
        		    </div>
        		    <div class="col-md-2 col-xs-3 " style="text-align:right;">
        		    <a href="tender.php" class="btn-blink-sm"> <b class="fa fa-angle-left"></b> Back</a>
        		    </div>
        		    
    		    </div>
    		    	
    		    <p>According to our Quantity Survey, Below is a Bill of Quantites that every applicant should fill in and submit.</p><br><br>
                
                <div class="table table-responsive">
                <table class="table table-bordered table-striped" style="border:none;padding-bottom:0px!important;margin-bottom:0px;color:black;">
                    <?php read_bq_contents(); ?>
                </table>
                </div>
                <br><br>
                
                <?php
                    session_start();
                    if(empty($_SESSION['subcontractor'])){
                        ?>
                            <center><a href="apply-for-tender.php?action=apply&token=<?php echo $_GET['token']; ?>" class="btn-blink">Apply This Tender</a></center>
                        <?php
                    }else{
                        ?>
                        <form action="" method="post">
                            <input type="hidden" name="" value="">
                            <center><button type="submit" name="submit_quotation" class="btn-blink">Submit Your Quotation</button></center><br><br>
                        </form>
                        <?php
                    }
                ?>
                
                
                
    		</div>
		</div>

			
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

</html>