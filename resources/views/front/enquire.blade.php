@extends('layouts.app',['title'=>'Enquire'])
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span></span>
                                <h1>Enquire About Service</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Enquiry</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start enquire Area-->
        <div class="container" style="min-height:200px;padding:30px 0px;">
            <h2 style="text-align:center;text-transform:uppercase;font-family:'sans-serif';"> Tell us about yourself </h2><br><br>

            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row form-container">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="surname" class="input-group-addon label-bold">Surname</label>
                                <input type="text" class="form-control" id="surname" placeholder="Enter surname..." name="surname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="first_name" class="input-group-addon label-bold">First Name</label>
                                <input type="text" placeholder="Enter first name..." class="form-control" id="firstname" name="firstname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="last_name" class="input-group-addon label-bold">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter last name..." id="lastname" name="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="reg_id" class="input-group-addon label-bold">Nationality</label>
                                <input type="text" placeholder="e.g., Kenyan" class="form-control" id="nationality" name="nationality" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="date" class="input-group-addon label-bold">Date Of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_ob" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="gender" class="input-group-addon label-bold">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="">---- Select ----</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="occupation" class="input-group-addon label-bold">Occupation</label>
                                <input type="text" placeholder="e.g., Civil Servant" class="form-control" id="occupation" name="occupation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="national_identity" class="input-group-addon label-bold">National Identity</label>
                                <input type="text" placeholder="National ID No." class="form-control" id="national_identity" name="national_id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="marital" class="input-group-addon label-bold">Marital Status</label>
                                <select class="form-control" id="marital" name="marital" required>
                                    <option value="">---- Select ----</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="email" class="input-group-addon label-bold">Email Address</label>
                                <input type="email" placeholder="Valid email address" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="phone_number" class="input-group-addon label-bold">Phone Number</label>
                                <input type="text" placeholder="Valid phone number" class="form-control" id="phone_number" name="phone_number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="next_of_kin_name" class="input-group-addon label-bold">Next of Kin Name</label>
                                <input type="text" placeholder="Full names" class="form-control" id="next_of_kin_name" name="next_of_kin_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="next_of_kin_relationship" class="input-group-addon label-bold">Next of Kin Relationship</label>
                                <input type="text" placeholder="e.g., Sister, Brother, Husband, Wife" class="form-control" id="next_of_kin_relationship" name="next_of_kin_relationship">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="next_of_kin_phone_number" class="input-group-addon label-bold">Next of Kin Phone Number</label>
                                <input type="text" placeholder="Valid number" class="form-control" id="next_of_kin_phone" name="next_of_kin_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="service" class="input-group-addon label-bold">Select Service</label>
                                <select class="form-control" id="service" name="service" required>
                                    <option value="">---- Select ----</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="county_select" class="input-group-addon label-bold">Select Property's County</label>
                                <select id="county_select" onchange="showSubCounties(this.value)" class="form-control" name="county" required>
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
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="sub_county_select" class="input-group-addon label-bold">Sub-county / Constituency</label>
                                <select id="sub_county_select" onchange="showWards(this.value)" class="form-control" name="sub_county" required>
                                    <option value="">------- Select -------</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <label for="ward_select" class="input-group-addon label-bold">Ward / Sublocation</label>
                                <select id="ward_select" class="form-control" name="ward" required>
                                    <option value="">------- Select ------</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-blink">Submit & Proceed <b class="fa fa-angle-right"></b></button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        <!--End enquire Area-->
@endsection