@extends('layouts.app',['title'=>'Household Loans'])
@section('content')
<!--Start breadcrumb area-->
<?php $img = asset("storage/front/images/resources/breadcrumb-bg-2.jpg"); ?>
<section class="breadcrumb-area style2" style="background-image: url({{$img}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">

                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/services/credit">Credit Services</a></li>
                            <li class="active">Household Items Loan Application</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--End breadcrumb area-->
<section>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <h2>Loan Not Available <img src='https://img.icons8.com/?size=100&id=GFZarxtFIkhx&format=png&color=000000' style='height: 40px; width: 40px;'></h2>
        <p>We're sorry, but the loan you are looking for is currently not available. Please check back later or contact our support team for more information.<br>
            <hr>
            <img src='https://img.icons8.com/?size=100&id=xLIkjgcmFOsC&format=png&color=000000' style='height: 30px; width: 30px;'> Email: info@sampesagroup.com <br>
            <img src='https://img.icons8.com/?size=100&id=C8twQXUl1qoA&format=png&color=000000' style='height: 30px; width: 30px;'>Contact: (+254) 0714464701
        </p>
    </div>
</section>
@endsection