@extends('layouts.app',['title'=>'Stocks & Bonds Loan'])
@section('content')
<div class="main-page">
	<div class="thumbnail">
		<div class="col-md-7 col-xs7" style="padding-left:0px;padding-top:0.5em;">
			<h3 style="font-weight:bold;color:avy;" class="text-danger">
				<a href="/services/"><b class="fa fa-angle-left "></b></a>
				<b class="fa fa-car text-success"></b> 
				Stock / Bond Details
			</h3>
		</div>
		<div class="clearfix"></div>
		<hr>
		<form action="/loan/stock_loan" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="form-group col-md-4">
					<label for="investment_type">Investment Type:</label>
					<select id="investment_type" name="investment_type" class="form-control" required>
						<option value="">--Select--</option>
						<option value="Stocks">Stocks</option>
						<option value="Bonds">Bonds</option>
					</select>
				</div>

				<div class="form-group col-md-4">
					<label for="investment_name">Company Name:</label>
					<input type="text" id="investment_name" name="investment_name" class="form-control" required placeholder="Enter Company Name">
				</div>

				<div class="form-group col-md-4">
					<label for="investment_ticker">Ticker Symbol:</label>
					<input type="text" id="investment_ticker" name="investment_ticker" class="form-control" required placeholder="Eg KPLC">
				</div>

				<div class="form-group col-md-4">
					<label for="investment_quantity">Quantity / Number:</label>
					<input type="number" id="investment_quantity" name="investment_quantity" class="form-control" required placeholder="Number Of Shares / Bond Quantity">
				</div>

				<div class="form-group col-md-4">
					<label for="investment_value">Stock / Bond Market Value:</label>
					<input type="number" id="investment_value" name="investment_value" class="form-control" required placeholder="Market Value of the Commodity">
				</div>

				<div class="form-group col-md-4">
					<label for="stock_certificate">Stock / Bond Certificate Copy:</label>
					<input type="file" id="stock_certificate" name="stock_certificate_file" class="form-control" required>
				</div>

				<div class="form-group col-md-4">
					<label for="investment_value">Stock / Bond Certificate Number:</label>
					<input type="text" id="certificate_number" name="certificate_number" class="form-control" required placeholder="Enter Certificate Number">
				</div>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary" style="font-weight:bold;">Submit & Proceed <b class="fa fa-angle-right"></b></button>
			</div>
		</form>
		<div class="clearfix"></div>
	</div>
</div>
@endsection