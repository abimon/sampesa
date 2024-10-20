@extends('layouts.app',['title'=>'Tender BQ'])
@section('content')
<!--end-->
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
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
        if (empty($_SESSION['subcontractor'])) {
        ?>
            <center><a href="apply-for-tender.php?action=apply&token=<?php echo $_GET['token']; ?>" class="btn-blink">Apply This Tender</a></center>
        <?php
        } else {
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
@endsection