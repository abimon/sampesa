@extends('layouts.dashboard',['title'=>'Geospatial Information'])
@section('dashboard')
<div class="d-flex justify-content-end"><a href="{{route('devnature.index',['id'=>$id])}}"><button class='btn btn-outline-primary'>Next Phase(Nature of Development) <i class="fa fa-arrow-right"></i></button></a></div>
<div class="card p-3" onload="getLocation()">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-2 col-md-6 row p-3">
                <label for="latitude" class="col-md-4">Latitude:</label>
                <textarea id="latitude" class="form-control col-md-8" placeholder="Turn On Your Location & Refresh Page To Get Latitude" rows="1" required="" name="latitude"></textarea>
            </div>
            <div class="mb-2 col-md-6 row p-3">
                <label for="longitude" class="col-md-4">Longitude:</label>
                <textarea id="longitude" class="form-control col-md-8" placeholder="Turn On Your Location & Refresh Page To Get Longitude" rows="1" name="longitude"></textarea>
            </div>

            <div class="col-md-6 mb-2 row p-3">
                <label class="col-md-6">Upload a Picture of the Site</label>
                <input type="file" class="form-control col-md-6" accept="image/*" name="site_photo"> <!--capture="camera"-->
            </div>

            <div class="col-md-6 mb-2">
                <label>Give Comments on the Site: developments, topology and any other relevant geospatial information </label>
                <textarea class="form-control" rows="5" name="site_description"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="submit_geospatial" class="btn btn-success"><b class="fa fa-save"></b> Save & Proceed <b class="fa fa-angle-right"></b> </button>
        </div>
    </form>
</div>

<script>
    function handleLocationError(error, map, pos) {
        console.error(error);
        var infoWindow = L.popup().setLatLng(pos).setContent(error.message);
        map.openPopup(infoWindow);
    }
</script>
@endsection