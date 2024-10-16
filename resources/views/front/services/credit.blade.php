@extends('layouts.app',['title'=>'Credit Service'])
@section('content')
<!--Start breadcrumb area-->
<?php $image=asset('storage/front/images/resources/breadcrumb-bg-2.jpg');?>
<section class="breadcrumb-area style2" style="background-image: url({{$image}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content-box clearfix">
                    <div class="title-s2 text-center">
                        <span>Our Credit & Loan Services</span>
                        <h1>Sampesa Group Ltd</h1>
                    </div>
                    <div class="breadcrumb-menu float-left">
                        <ul class="clearfix">
                            <li><a href="/">Home</a></li>
                            <li class="active">Credit & Loan Services</li>
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
            @foreach ($loans as $loan)
            <!-- Start single project item -->
            <div class="col-md-4 filter-item contem trad">
                <div class="single-project-style7">
                    <div class="img-holder">
                        <img src="{{asset('storage/loan/covers/'.$loan->cover)}}" alt="{{$loan->title}}">
                        <div class="overlay-content">
                            <div class="inner-content">
                                <div class="title-box">
                                    <span style='text-transform:uppercase;'>{{$loan->title}} Loan</span>
                                    <h3><a href="/loans/{{$loan->title}}">{{$loan->interest}}% Monthly for 3 to 24 Months</a></h3>
                                    <a class="btn btn-primary btn-sm" target="_top" href="/loans/apply/{{$loan->title}}">APPLY &raquo;</a>
                                    <a class="btn btn-primary btn-sm" target="_top" href="/loans/{{$loan->title}}">READ MORE &raquo;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <span>{{$loan->title}} Loan</span>
                        <h3><a href="/loans/{{$loan->title}}">{{$loan->interest}}% Monthly for 3 to 24 Months</a></h3>
                        <a class="btn btn-primary btn-sm" target="_top" href="/loans/apply/{{$loan->title}}">Apply &raquo;</a>
                        <a class="btn btn-primary btn-sm" target="_top" href="/loans/{{$loan->title}}">Read More &raquo;</a>
                    </div>
                </div>
            </div>
            <!-- End single project item -->
            @endforeach
        </div>
    </div>
</section>
<!--End Main project area style4-->
@endsection