@extends('layouts.app',['title'=>'Biogas Service'])
@section('content')

<?php $img =asset("storage/front/images/resources/breadcrumb-bg-2.jpg");?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">

                        <h1>Store</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Store</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->
<!--Start store Area-->
<!-- Page Content -->
<section class="portfolio-content" style="margin-top:150px;">
    <h3 style="font-size:200%;">Explore our Latest and Modern House Designs</h3>
    <p class="text-center">A selection of our ready-made drawings are available, or you can ask for drawings that are uniquely designed for you.</p>
    <hr>
    <div class="container">
        <!-- Projects Row -->


        <h2 class="projet" style="padding:2em 0px;text-align:center;">
            <a href="registration.php" target="_top" style="background: red; padding-right: 20px;" class="btn btn-danger btn-blink">Buy ready-made Drawing</a>
            <a href="registration.php" target="_top" style="background: red;" class="btn btn-danger btn-blink">Request Personalised Drawing</a>
        </h2>
        <!-- /.row -->
    </div>
</section>
<hr>
<section class="portfolio-pages">
    <div class="container">
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection