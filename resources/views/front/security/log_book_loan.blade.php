@extends('layouts.app',['title'=>'Log Book Loans'])
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
							<li><a href="/services/credit">Credit Services</a></li>
							<li><a href="/loan/log_book_loan">Logbook Loan</a></li>
							<li class="active">Logbook Loan Application</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
</section>
<!--End breadcrumb area-->
<section id="page-wrapper">
	<div class="container mt-3">
		<form action="" method="post" class="card p-3">
			<div class="row p-3">
				<div class="col-12">
					<h3>Car Details.</h3>
				</div>
				<hr>
				<div class="form-group col-md-6">
					<label for="manufacturer">Car Make:</label>

					<select id="mySelect" onchange="showText(this.value)" name="make" class="form-control" required>
						<option value="">--Select--</option>
						<option value="Audi">Audi</option>
						<option value="BMW">BMW</option>
						<option value="Chevrolet">Chevrolet</option>
						<option value="Ford">Ford</option>
						<option value="Honda">Honda</option>
						<option value="Hyundai">Hyundai</option>
						<option value="Jeep">Jeep</option>
						<option value="Kia">Kia</option>
						<option value="Lexus">Lexus</option>
						<option value="Mazda">Mazda</option>
						<option value="Mercedes-Benz">Mercedes-Benz</option>
						<option value="Nissan">Nissan</option>
						<option value="Subaru">Subaru</option>
						<option value="Tesla">Tesla</option>
						<option value="Toyota">Toyota</option>
						<option value="Volkswagen">Volkswagen</option>
						<option value="others" >others</option>
					</select>

					<div id="myTextInput" style="padding-top:10px; display:none;">
						<label>Type The Other Car make</label>
						<input type="text" name="other_makes" id="makes" class="form-control" placeholder="Enter The Car Make">
					</div>
					<script type="text/javascript">
						function showText(val) {
							console.log(val)
							if(val == 'others'){
								document.getElementById('myTextInput').style.display=''
								document.getElementById("makes").attributes.required= "required";
							}
							else{
								document.getElementById('myTextInput').style.display='none'
								document.getElementById("makes").attributes.required= "";
							}
						}
					</script>
				</div>
				<div class="form-group col-md-6">
					<label for="model">Car Model:</label>
					<input type="text" id="model" name="cmodel" class="form-control" required placeholder="eg V8, Harrier">
				</div>
				<div class="form-group col-md-6">
					<label for="type">Type:</label>
					<select id="type" name="type" class="form-control" required placeholder="">
						<option value="">--Select--</option>
						<option value="SUV">SUV</option>
						<option value="Salon Car">Salon Car</option>
						<option value="Lorry">Lorry</option>
						<option value="Convertible">Convertible</option>
						<option value="Bus">Bus</option>
						<option value="Wagon">Wagon</option>
						<option value="Van">Van</option>
						<option value="Pickup Truck">Pickup Truck</option>
						<option value="Other">Other</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="year">Year:</label>
					<input type="number" id="year" name="year" class="form-control" min="1900" max="2030" required placeholder="Year Of Make">
				</div>
				<div class="form-group col-md-6">
					<label for="mileage">Mileage:</label>
					<input type="number" id="mileage" name="mileage" class="form-control" required placeholder="Enter Mileage">
				</div>
				<div class="form-group col-md-6">
					<label for="condition">Condition:</label>
					<select id="condition" name="condition" class="form-control" required placeholder="">
						<option value="">--Select--</option>
						<option value="excellent">Excellent</option>
						<option value="good">Good</option>
						<option value="fair">Fair</option>
						<option value="poor">Poor</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="energy">Car's Fuel Type:</label>
					<select id="energy" name="energy" class="form-control" required placeholder="">
						<option value="">--Select--</option>
						<option value="Petrol">Petrol</option>
						<option value="Diesel">Diesel</option>
						<option value="Electric">Electric</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="transition_type">Transition Type:</label>
					<select id="transition_type" name="transition_type" class="form-control" required placeholder="">
						<option value="">--Select--</option>
						<option value="Manual">Manual</option>
						<option value="Automatic">Automatic</option>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="color">Color:</label>
					<input type="text" id="color" name="color" class="form-control" required placeholder="eg Green">
				</div>
				<div class="form-group col-md-6">
					<label for="lights_type">Types Of Lights:</label>
					<input type="text" id="lights_type" name="lights_type" class="form-control" required placeholder="eg Xenon Lamps">
				</div>
				<div class="form-group col-md-6">
					<label for="airbags">No of Airbags:</label>
					<input type="number" id="airbags" name="airbags" class="form-control" required placeholder="specify">
				</div>
				<div class="form-group col-md-6">
					<label for="engine_number">Engine Number:</label>
					<input type="text" id="engine_number" name="engine_number" class="form-control" required placeholder="Enter Engine">
				</div>
				<div class="form-group col-md-6">
					<label for="chasis_number">Chasis Number:</label>
					<input type="text" id="chasis_number" name="chasis_number" class="form-control" required placeholder="Chasis Number">
				</div>
				<div class="form-group col-md-6">
					<label for="number_plate">Car's Registration Number:</label>
					<input type="text" id="number_plate" name="number_plate" class="form-control" required placeholder="eg KDG 123B" maxlength="8">
				</div>
				<div class="form-group col-md-6">
					<label for="engine_size">Engine Rating</label>
					<input type="number" id="engine_size" name="engine_size" class="form-control" required placeholder="How Many CCs">
				</div>
			</div>
			<div class="form-group col-md-6" style='align-items: center;'>
				<button type="submit" name="submit_dets" class="btn btn-primary">Submit and Proceed <b class="fa fa-angle-right"></b> </button>
			</div>
		</form>
	</div>
	</secti>
	@endsection