@extends('layouts.app',['title'=>'Property Loan'])
@section(section: 'content')
<div id="page-wrapper">
	<div class="main-page">
		<div class="container" style="padding:1.5em 0px;">
			<p style="margin-top:100px;font-weight:bold;">We appreciate your interest in applying a property loan with us. However, You are required to provide the below information as it is in order to proceed to step 2</p>
			<br>
			<p><b class="fa fa-info-circle"></b> you are also required to be at the exact location of your property for the system to pick the right coordinates</p>
			<br><br>
			<div class="row">
				<div class="col-md-8">
					<h4 style="font-weight:bold;font-family: sans-serif; color:black;"><a style="color:black;opacity:0.5;" href="index.php"><b class="fa fa-angle-left"></b> STEP 1: PROPERTY DETAILS</a></h4>
				</div>
				<div class="col-md-3 textright" style="text-align:right;">
					<a href="ownership-status.php" class="btn btn-primary">Next Step <b class="fa fa-arrow-right"></b> </a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div><br>
		</div>
		<div class="container">
			<form action="" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="common_area_name">Common Area Name:</label>
							<input type="text" class="form-control" id="common_area_name" placeholder="how local people call the area" name="common_area_name" required>
						</div>
						<div class="form-group">
							<label for="county">County:</label>

							<select id="county_select" onchange="showSubCounties(this.value)" class="form-control" required="" name="county">
								<option value="">------- Select -------</option>

								<option value="Baringo">Baringo</option>
								<option value="Bomet">Bomet</option>
								<option value="Bungoma">Bungoma</option>
								<option value="Busia">Busia</option>
								<option value="Elgeyo Marakwet">Elgeyo Marakwet</option>
								<option value="Embu">Embu</option>
								<option value="Garissa">Garissa</option>
								<option value="Homa Bay">Homa Bay</option>
								<option value="Isiolo">Isiolo</option>
								<option value="Kajiado">Kajiado</option>
								<option value="Kakamega">Kakamega</option>
								<option value="Kericho">Kericho</option>
								<option value="Kiambu">Kiambu</option>
								<option value="Kilifi">Kilifi</option>
								<option value="Kirinyaga">Kirinyaga</option>
								<option value="Kisii">Kisii</option>
								<option value="Kisumu">Kisumu</option>
								<option value="Kitui">Kitui</option>
								<option value="Kwale">Kwale</option>
								<option value="Laikipia">Laikipia</option>
								<option value="Lamu">Lamu</option>
								<option value="Machakos">Machakos</option>
								<option value="Makueni">Makueni</option>
								<option value="Mandera">Mandera</option>
								<option value="Marsabit">Marsabit</option>
								<option value="Meru">Meru</option>
								<option value="Migori">Migori</option>
								<option value="Mombasa">Mombasa</option>
								<option value="Murang'a">Murang'a</option>
								<option value="Nairobi">Nairobi</option>
								<option value="Nakuru">Nakuru</option>
								<option value="Nandi">Nandi</option>
								<option value="Narok">Narok</option>
								<option value="Nyamira">Nyamira</option>
								<option value="Nyandarua">Nyandarua</option>
								<option value="Nyeri">Nyeri</option>
								<option value="Samburu">Samburu</option>
								<option value="Siaya">Siaya</option>
								<option value="Taita Taveta">Taita Taveta</option>
								<option value="Tana River">Tana River</option>
								<option value="Tharaka Nithi">Tharaka Nithi</option>
								<option value="Trans Nzoia">Trans Nzoia</option>
								<option value="Turkana">Turkana</option>
								<option value="Uasin Gishu">Uasin Gishu</option>
								<option value="Vihiga">Vihiga</option>
								<option value="Wajir">Wajir</option>
								<option value="West Pokot">West Pokot</option>

								<!-- Add more counties here -->
							</select>
						</div>
						<div class="form-group">

							<label>Sub-county / Constituency</label>
							<select id="sub_county_select" onchange="showWards(this.value)" class="form-control" required="" name="sub_county">
								<option value="">------- Select -------</option>
							</select>
						</div>
						<div class="form-group">

							<label>ward / Sublocation</label>
							<select id="ward_select" class="form-control" required="" name="ward">
								<option value="">------- Select ------</option>
							</select>
						</div>

						<div class="form-group">
							<label for="latitude">Latitude: <i style="opacity:0.6;font-size:90%;">ensure you are at the property's location</i></label>
							<textarea id="latitude" readonly="" class="form-control" placeholder="Turn On Your Location to get Latitude" rows="1" required="" name="latitude"></textarea>
						</div>
						<div class="form-group">
							<label for="longitude">Longitude: <i style="opacity:0.6;font-size:90%;">ensure you are at the property's location</i></label>
							<textarea id="longitude" readonly="" class="form-control" placeholder="Turn On Your Location to get Longitude" rows="1" required="" name="longitude"></textarea>
						</div>


					</div>
					<div class="col-md-6">

						<div class="form-group">
							<label for="nearest_town">Nearest Town:</label>
							<input type="text" class="form-control" id="nearest_town" placeholder="nearest known center" name="nearest_town" required>
						</div>


						<div class="form-group">
							<label for="plot_no">Plot Registration No:</label>
							<input style="text-transform:uppercase;" type="text" class="form-control" id="plot_no" placeholder="Enter The Property Registration Number" name="plot_no" required>
						</div>


						<div class="form-group" style="margin-bottom:20px;">
							<label for="dimensions">Plot Dimensions (In Meters) </label>
							<div style="width: 100%;">
								<div class="input-group" style="width:50%;float:left;">
									<label class="input-group-addon" style="font-weight:bold;">Width (M)</label>
									<input type="number" class="form-control" id="dimensions" name="dimensions" required placeholder="Enter width in meters" min="0">


								</div>
								<div class="input-group" style="width:50%;float:left;">
									<label class="input-group-addon" style="font-weight:bold;">by</label>
									<input type="number" class="form-control" id="dimensions" name="dimensions2" required placeholder="Enter Length in meters" min="0">

								</div>
							</div>

							<div class="clearfix"></div>
						</div>

						<div class="form-group">
							<label for="soil_type">Soil Type:</label>
							<select class="form-control" name="soil_type" required="">
								<option value="">------- Select -------</option>

								<option value="Sand">Sand</option>
								<option value="Silt">Silt</option>
								<option value="Clay">Clay</option>
								<option value="Loam">Loam</option>
								<option value="Peat">Peat</option>
								<option value="Gravel">Gravel</option>
								<option value="Chalk">Chalk</option>
								<option value="Limestone">Limestone</option>
								<option value="Sandstone">Sandstone</option>
								<option value="Shale">Shale</option>

							</select>
						</div>

						<input type="hidden" class="form-control" id="area_value" name="area_value" min="1" placeholder="Min Value 0" value="1">

						<!--start land rates---->
						<div class="form-group">
							<label for="tax_status"><b class="fa fa-angle-down"></b> Land Rates and Taxes:</label>
							<div class="">

								<input type="radio" name="tax_status" value="cleared" required> &nbsp;&nbsp;Cleared<br>
								<input type="radio" name="tax_status" value="in_arrears"> &nbsp;&nbsp;In Arrears<br>

								<div class="form-group" id="arrears_years" style="display:none; background: rgba(0,0,0,0.1);">
									<label for="arrears_years" style="margin:10px;">Select Arrears Years:</label>
									<div class="row">
										<div class="form-group col-md-6">
											<div class="input-group">
												<label class="input-group-addon">from date</label>
												<input type="date" class="form-control" id="arrears_years_from" name="arrears_years_from">
											</div>
										</div>
										<div class="form-group col-md-6">
											<div class="input-group">
												<label class="input-group-addon">to date</label>
												<input type="date" class="form-control" id="arrears_years_to" name="arrears_years_to">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">

							<b><b class="fa fa-angle-down"></b> Is there any encumbrance attached to the property</b><br>
							<input type="radio" id="encumbrance_yes" name="encumbrance" value="yes" onchange="showEncumbranceOptions()">&nbsp;&nbsp; Yes<br>
							<input type="radio" id="encumbrance_no" name="encumbrance" value="none" onchange="showEncumbranceOptions()">&nbsp;&nbsp; No

							<div class="row" id="encumbrance_options" style="display:none; background: rgba(0,0,0,0.1);">
								<div class="col-md-5">
									<label for="encumbrance_type">Encumbrance Type:</label><br>
									<select id="encumbrance_type" name="encumbrance_type" class="form-control">
										<option value="loans">Loans</option>
										<option value="caveat">Caveat</option>
										<option value="disputes">Disputes</option>
										<option value="succession">Succession</option>
										<option value="lease">lease</option>
										<option value="controlled development">Controlled Development</option>
										<option value="others">Others (describe)</option>
									</select>
								</div>

								<div class="col-md-7">
									<label for="encumbrance_evidence">Encumbrance Evidence:</label><br>
									<div style="background: lightgray;padding:10px;" class="file-upload-wrapper">
										<p>Drag and drop file here or </p>
										<input type="file" id="input-file-now-custom-2" name="encumbrance_evidence" class="file-upload"
											data-height="500" style="height:70px;margin-top:20px;width:100%;" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="submit_property_status" class="btn btn-success font-bold" style="font-weight: bold;"><b class="fa fa-save"></b> Save & Proceed to Next Phase <b class="fa fa-angle-right"></b> </button>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection