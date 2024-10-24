@extends('layouts.dashboard',['title'=>'Current Development'])
@section('dashboard')
<div class="d-flex justify-content-end mb-2"><a href="{{route('utility.index',['id'=>$id])}}"><button class='btn btn-outline-primary'>Next Phase(Services & Utility) <i class="fa fa-arrow-right"></i></button></a></div>
<div class="card p-3">
    <form action="" method="post" enctype="multipart/form-data" onsubmit="showLoading()">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-2">
                <label>Are there any developments on the property?</label>
                <div class="" style="font-weight:bold;">
                    <input type="radio" name="any_current_devs" onchange="showfield(this.value)" value="yes"> Yes <br>
                    <input type="radio" name="any_current_devs" onchange="showfield(this.value)" value="no"> No <br>
                </div>
                <div class="" id="field" style="display:none;">
                    <label><b class="fa fa-photo"></b> Attach Evidence</label>
                    <input type="file" name="current_devs_pic" class="form-control" accept=".png,.jpg,.jpeg,.gif,.webp">
                    <label>Give a brief explanation (including ground cover) <b class="fa fa-pencil"></b></label>
                    <textarea name="current_dev_desc" class="form-control" rows="7" placeholder="Start typing here......"></textarea>
                </div>
            </div>

            <div class="col-md-6 mb-2">
                <label> Are there any developments in the neighborhood?</label>
                <div class="" style="font-weight:bold;">
                    <input type="radio" name="neighboring_devs" onchange="showtable(this.value)" value="yes"> Yes <br>
                    <input type="radio" name="neighboring_devs" onchange="showtable(this.value)" value="no"> No <br>
                </div>
            </div>
            <p><i>Specify below if available</i></p>
            <div class="table table-responsive" id="neib_dev" style="display:none;">
                <table class="table table-striped table-bordered border-info">
                    <thead class="bg-info" style="color:white;">
                        <tr>
                            <th style="color:white;">Unit Type</th>
                            <th style="color:white;">mark if available</th>
                            <th style="color:white;">Unit Demand</th>
                            <th style="color:white;">Approx Monthly Rent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style='font-weight:bold;'>Single Rooms</td>
                            <td>
                                <input type="checkbox" name="single_available" value="available">
                            </td>
                            <td>
                                <select class="form-control" name="single_demand">
                                    <option value="">---select--</option>
                                    <option value="high">High</option>
                                    <option value="high">Medium</option>
                                    <option value="high">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="single_rent" placeholder=" monthly rent">
                            </td>
                        </tr>
                        <tr>
                            <td style='font-weight:bold;'>Double Rooms</td>
                            <td><input type="checkbox" name="double_available" value="available"></td>
                            <td>
                                <select class="form-control" name="double_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="double_rent" placeholder=" monthly rent">
                            </td>
                        </tr>
                        <tr>
                            <td style='font-weight:bold;'>Bedsitter</td>
                            <td><input type="checkbox" name="bedsitter_available" value="available"></td>
                            <td>
                                <select class="form-control" name="bedsitter_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="bedsitter_rent" placeholder=" monthly rent">
                            </td>
                        </tr>
                        <tr>
                            <td style='font-weight:bold;'>1 Bedroom</td>
                            <td><input type="checkbox" name="one_bd_available" value="available"></td>
                            <td>
                                <select class="form-control" name="one_bd_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="one_bd_rent" placeholder=" monthly rent">
                            </td>
                        </tr>
                        <tr>
                            <td style='font-weight:bold;'>2 Bedroom</td>
                            <td><input type="checkbox" name="two_bd_available" value="available"></td>
                            <td>
                                <select class="form-control" name="two_bd_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="two_bd_rent" placeholder="monthly rent">
                            </td>
                        </tr>

                        <tr>
                            <td style='font-weight:bold;'>3 Bedroom</td>
                            <td><input type="checkbox" name="three_bd_available" value="available"></td>
                            <td>
                                <select class="form-control" name="three_bd_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="three_bd_rent" placeholder=" monthly rent">
                            </td>
                        </tr>



                        <tr>
                            <td style='font-weight:bold;'>Mansionettes / Bungallows</td>
                            <td><input type="checkbox" name="mansionette_available" value="available"></td>
                            <td>
                                <select class="form-control" name="mansionette_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="mansionette_rent" placeholder="monthly rent">
                            </td>
                        </tr>

                        <tr>
                            <td style='font-weight:bold;'>Offices</td>
                            <td><input type="checkbox" name="offices_available" value="available"></td>
                            <td>
                                <select class="form-control" name="offices_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="offices_rent" placeholder="monthly rent">
                            </td>
                        </tr>
                        <tr>
                            <td style='font-weight:bold;'>Space Shops</td>
                            <td><input type="checkbox" name="space_shops_available" value="available"></td>
                            <td>
                                <select class="form-control" name="space_shops_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="space_shops_rent" placeholder="monthly rent">
                            </td>
                        </tr>

                        <tr>
                            <td style='font-weight:bold;'>Warehouses / Godowns</td>
                            <td><input type="checkbox" name="warehouse_available" value="available"></td>
                            <td>
                                <select class="form-control" name="warehouses_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="warehouse_rent" placeholder="monthly rent">
                            </td>
                        </tr>

                        <tr>
                            <td style='font-weight:bold;'>Hotels / AirBNB</td>
                            <td><input type="checkbox" name="hotels_air_bnb_available" value="available"></td>
                            <td>
                                <select class="form-control" name="hotels_air_bnb_demand">
                                    <option value="">--select--</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="hotels_air_bnb_rent" placeholder="stay-cation rent">
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success"><b class="fa fa-save"></b> Save & Proceed <b class="fa fa-check-circle"></b> </button>
        </div>
    </form>
</div>
<script>
    function showtable(val) {
        if (val == 'yes') {
            document.getElementById('neib_dev').style.display = ''
        } else {
            document.getElementById('neib_dev').style.display = 'none'
        }
    }

    function showfield(val) {
        if (val == 'yes') {
            document.getElementById('field').style.display = ''
        } else {
            document.getElementById('field').style.display = 'none'
        }
    }
</script>
@endsection