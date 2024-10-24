@extends('layouts.dashboard',['title'=>'Nature of Development'])
@section('dashboard')
<div class="d-flex justify-content-end"><a href="{{route('development_type.index',['id'=>$id])}}"><button class='btn btn-outline-primary'>Next Phase(House Type) <i class="fa fa-arrow-right"></i></button></a></div>
<div class="card p-3">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label>Upload Beacon Re-Establishment Map and a Sketch of the Property</label>
                <input type="file" class="form-control" name="sketch_map_file">
            </div>
            <div class="col-md-6 mb-2">
                <label> What is the nature of the proposed development </label>
                <select class="form-control" name="type_of_development">
                    <option value="">----Select----</option>
                    <option value="Rental Residential">Rental Residential</option>
                    <option value="Commercial (Offices / Shops)">Commercial (Offices / Shops / Hotels)</option>
                    <option value="Owners Occupier">Owners Occupier</option>
                    <option value="Combination of Rental Residential & Commercial">Combination of Rental Residential & Commercial</option>
                    <option value="Petrol Station">Petrol Station</option>
                    <option value="Hotel/Resort">Hotel/Resort</option>
                    <option value="Lodging/Guest Houses">Lodging/Guest Houses</option>
                    <option value="GoDowns/Warehouses">Go-Downs/Warehouses</option>
                    <option value="Schools">Schools</option>
                </select>
            </div>
            <div class="col-md-6 mb-2">
                <label>Write Your Recommendations</label>
                <textarea class="form-control" rows="7" name="sketch_map_recommendations" placeholder="Type Recommendations ..." required></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" name="submit_area">Upload and Save</button>
        </div>
    </form>
</div>
@endsection