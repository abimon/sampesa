@extends('layouts.app',['title'=>'Stocks & Bonds Loan'])
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
							<li><a href="/services">Services</a></li>
							<li><a href="/services/credit">Credit Services</a></li>
							<li class="active">Stocks & Bonds Loan</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End breadcrumb area-->
<section class="p-3">
	<form action="{{route('stock.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="type">Investment Type:</label>
				<select id="type" name="type" class="form-control col-md-8" required>
					<option value="">--Select--</option>
					<option value="Stocks">Stocks</option>
					<option value="Bonds">Bonds</option>
				</select>
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="name">Company Name:</label>
				<input type="text" id="name" name="name" class="form-control col-md-8" required placeholder="Enter Company Name" style="text-transform: uppercase;">
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="ticker">Ticker Symbol:</label>
				<input type="text" id="ticker" name="ticker" class="form-control col-md-8" required placeholder="Eg KPLC" style="text-transform:uppercase">
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="quantity">Quantity / Number:</label>
				<input type="number" id="quantity" name="quantity" class="form-control col-md-8" required placeholder="Number Of Shares / Bond Quantity" style="text-transform:uppercase">
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="value">Stock / Bond Market Value:</label>
				<input type="number" id="value" name="value" class="form-control col-md-8" required placeholder="Market Value of the Commodity">
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="certificate">Stock / Bond Certificate Copy:</label>
				<input type="file" id="certificate" name="certificate" class="form-control col-md-8" required>
			</div>

			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="value">Stock / Bond Certificate Number:</label>
				<input type="text" id="certificate_number" name="certificate_number" class="form-control col-md-8" required placeholder="Enter Certificate Number" style="text-transform:uppercase">
			</div>
			<div class="row mb-2 col-md-6">
				<label class="col-md-4" for="value">Loan Amount Requested:</label>
				<input type="number" id="certificate_number" name="amount" class="form-control col-md-8" required placeholder="Enter the loan amount you need" style="text-transform:uppercase">
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary" style="font-weight:bold;">Submit & Proceed <b class="fa fa-angle-right"></b></button>
		</div>
	</form>
</section>
@endsection