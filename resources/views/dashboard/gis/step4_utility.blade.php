@extends('layouts.dashboard',['title'=>'Services & Utility'])
@section('dashboard')
<div class="d-flex justify-content-end mb-2"><a href="{{route('amenities.index',['id'=>$id])}}"><button class='btn btn-outline-primary'>Next Phase(Social Amenities) <i class="fa fa-arrow-right"></i></button></a></div>
<div class="card p-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label class="inputgroup-addon"> Does the property have electricity</label>
                <div>
                    <input type="radio" name="electricity" onchange="showElec(this.value)" value="yes"> Yes
                    <input type="radio" name="electricity" onchange="showElec(this.value)" value="no"> No <br>
                </div>
                <div id="electricity-yes" style="display: none;">
                    <label> What is the available type of electricity</label>
                    <div class="">
                        <select class="form-control" name="electricity_yes_phase" style="text-transform: uppercase;">
                            <option value="" style="font-weight: bold;text-transform: uppercase;">---select---</option>
                            <option value="Single Phase" style="font-weight: bold;text-transform: uppercase;">Single Phase</option>
                            <option value="Three Phase" style="font-weight: bold;text-transform: uppercase;">Three Phase</option>
                        </select>
                    </div>
                </div>
                <div id="electricity-no" style="display: none;">
                    <label style="margin-bottom:0.5em;" class="addon"> What is the approximate distance</label>
                    <div class="">
                        <input style="width:100%;" type="text" name="" class="form-control" name="electricity_no_distance" placeholder="eg: along the plot, etc.">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label>Does the property have water</label>
                <div>
                    <input type="radio" onchange="waterShow(this.value)" name="water" value="yes"> Yes
                    <input type="radio" onchange="waterShow(this.value)" name="water" value="no"> No
                </div>
                <div class="" id="water-yes" style="display: none;">
                    <label>Where does the water come from</label>
                    <select class="form-control" name="water_yes_source">
                        <option value="" style="font-weight:bold;">--SELECT SOURCE--</option>
                        <option value="CITY COUNCIL">CITY COUNCIL</option>
                        <option value="BOREHOLE">BOREHOLE</option>
                        <option value="STREAM/RIVER">STREAM / RIVER</option>
                    </select>
                    <br>
                    <textarea class="form-control" placeholder="describe the source including distance and provider" name="water_description"></textarea>
                </div>
                <div class="" id="water-no" style="display: none;">
                    <label>What is the approximate distance to the nearest source</label>
                    <div class="">
                        <label>Specify</label>
                        <input type="text" name="water_no_distance" class="form-control" placeholder="Distance to the nearest source">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label class=""> Does the property have sewer line</label>
                <div>
                    <input type="radio" name="sewer_line" onchange="showSewer(this.value)" value="yes"> Yes
                    <input type="radio" name="sewer_line" onchange="showSewer(this.value)" value="no"> No
                </div>
                <div class="" id="sewer-yes" style="display: none;">
                    <label>What is the approximate distance </label>
                    <div class="">
                        <label>Specify</label>
                        <input type="text" class="form-control" placeholder="specify " name="sewer_yes_distance">
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label class="">Does the property have access roads</label>
                <div>
                    <input type="radio" name="access_roads" onchange="showRoad(this.value)" value="yes"> Yes
                    <input type="radio" name="access_roads" onchange="showRoad(this.value)" value="no"> No
                </div>
                <div class="" id="roads-yes" style="display: none;">
                    <label> specify the type of roads</label>
                    <div class="">
                        <label>specify</label>
                        <select class="form-control" name="access_roads_yes_type">
                            <option value="">--select road type--</option>
                            <option value="TARMAC ROADS">TARMAC ROAD</option>
                            <option value="MURRAM ROADS">MURRAM ROAD</option>
                            <option value="LOOSE SURFACE ROADS">LOOSE SURFACE ROADS</option>
                        </select>
                    </div>
                    <label>Approximate Width of The Road </label>
                    <div class="">
                        <label>Specify (Metres)</label>
                        <input type="number" placeholder="Specify road width" class="form-control" name="roads_distance">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" name="submit_services_utilities" style="font-weight:bold;"> <b class="fa fa-check-circle"></b> Save and proceed  </button>
        </div>

    </form>
</div>
<script>
    function waterShow(val) {
        if (val == 'yes') {
            document.getElementById('water-yes').style.display = ''
            document.getElementById('water-no').style.display = 'none'
        } else {
            document.getElementById('water-yes').style.display = 'none'
            document.getElementById('water-no').style.display = ''
        }
    }
    function showElec(val) {
        if (val == 'yes') {
            document.getElementById('electricity-yes').style.display = ''
            document.getElementById('electricity-no').style.display = 'none'
        } else {
            document.getElementById('electricity-yes').style.display = 'none'
            document.getElementById('electricity-no').style.display = ''
        }
    }
    function showSewer(val) {
        if (val == 'yes') {
            document.getElementById('sewer-yes').style.display = ''
        } else {
            document.getElementById('sewer-yes').style.display = 'none'
        }
    }
    function showRoad(val) {
        if (val == 'yes') {
            document.getElementById('roads-yes').style.display = ''
        } else {
            document.getElementById('roads-yes').style.display = 'none'
        }
    }
</script>
@endsection