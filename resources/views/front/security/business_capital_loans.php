@extends('layouts.app')
@section('content')
<div id="page-wrapper">
	<div class="container" style="padding-top:100px;">
		<div class="thumnail" style="margin:1em 1px;">
			<a href="/capital" style="text-decoration: none;">
				<div class="col-md-7 col-xs7" style="padding-left:0px;padding-top:0.5em;">
					<h2 style="font-weight:bold;color:avy;" class="text-primary"><b class="fa fa-angle-left "></b> <b class="fa fa-money text-success"></b> Capital Business Details</h2>
					<h4 style="margin-left:15px;padding-top:10px;"></h4>
				</div>
			</a>
			<div class="col-md-5 textright">
			</div>
			<div class="clearfix"></div>
			<hr>
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="/loan/apply/capital" class="nav-link">
						Apply
					</a>
				</li>
			</ul>
			<div class="row">
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="loan_id" class="form-control" value="{{'capital'}}">
					<input type="hidden" name="client" class="form-control" value="{{Auth()->user()->id}}">
			</div>
			<div class="form-group col-md-6">
				<label for="car_make">Business Name:</label>
				<input type="text" id="business_name" name="business_name" class="form-control" required placeholder="eg sampesa">
			</div>
			<div class="form-group col-md-6">
				<label for="car_make">Contact Number:</label>
				<input type="text" id="contact" name="contact" class="form-control" required value="{{Auth()->user()->contact}}">
			</div>
			<div class="form-group col-md-6">
				<label for="car_make">Email Address:</label>
				<input type="text" id="email" name="email" class="form-control" required value="{{Auth()->user()->email}}">
			</div>
			<div class="form-group col-md-6">
				<label for="car_make">Business Address:</label>
				<input type="text" id="business_address" name="business_address" class="form-control" required placeholder="eg 100 gtc ">
			</div>
			<div class="form-group col-md-6">
				<label for="car_year">Type of Business</label>
				<select class="form-control" value="" id="type_of_business" name="type_of_business" required>
					<option value="">---- Select ----</option>
					<option value="Private Limited Company">Private Limited Company</option>
					<option value="Public Limited Company">Public Limited Company</option>
					<option value="Company Limited by Guarantee.">Company Limited by Guarantee.</option>
					<option value="Limited Liability Partnership">Limited Liability Partnership</option>
					<option value="Limited Partnership">Limited Partnership</option>
					<option value="Foreign Company">Foreign Company</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Business Registration Number:</label>
				<input type="text" id="reg_no" name="reg_no" class="form-control" required placeholder="e.g Sampesa">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Business Licence Number:</label>
				<input type="text" id="licence_no" name="licence_no" class="form-control" required placeholder="e.g Sampesa">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Number of Years in Operation:</label>
				<input type="text" id="operational_years" name="operational_years" class="form-control" required placeholder="e.g 10">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Annual Revenue:</label>
				<input type="number" id="revenue" name="revenue" class="form-control" required placeholder="e.g ksh 1000000">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Amount Requested:</label>
				<input type="text" id="amount" name="amount" class="form-control" required placeholder="e.g Sampesa">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Purpose of Loan:</label>
				<input type="text" id="purpose" name="purpose" class="form-control" required placeholder="e.g Business fundin">
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Preferred Loan Term:</label>
				<select class="form-control" id="term" name="term" required>
					<option value="">---- Select ----</option>
					<option value="long">Long</option>
					<option value="short">Short</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="car_mileage">Preferred Repayment Schedule:</label>
				<input type="text" id="repayment_schedule" name="repayment_schedule" class="form-control" required placeholder="e.g short">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Upload Business licence <span style="color: red;">*</span> :</label>
				<input type="file" class="form-control" name="business_no" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Business KRA Pin <span style="color: red;">*</span>:</label>
				<input type="file" class="form-control" name="kra_pin" required="">
			</div>
			<div class="form-group col-md-6">
				<label for="procure">Do you wish to procure securities with Us</label>
				<select class="form-control" value="" id="procure" name="procure" required>
					<option value="">---- Select ----</option>
					<option value="yes">Yes</option>
					<option value="no">No</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Upload Title deed:</label>
				<input type="file" class="form-control" name="title_deed">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Upload Bank guarantees :</label>
				<input type="file" class="form-control" name="bank_guarantee">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Upload Fixed deposit guarantees :</label>
				<input type="file" class="form-control" name="fixed_deposit">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Upload Vehicle logbooks. :</label>
				<input type="file" class="form-control" name="logbook">
			</div>
			<div class="form-group col-md-6">
				<label for="business_licence">Additional Documents(Licences) :</label>
				<input type="file" name="files[]" multiple>
			</div>
			<div class="form-group col-md-6">
				<button type="submit" name="submit_capital_loan" value="submit_capital_loan" class="btn btn-primary">Submit and Proceed <b class="fa fa-angle-right"></b> </button>
			</div>
			</form>
		</div>
	</div>
</div>
@endsection