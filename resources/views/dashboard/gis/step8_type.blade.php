@extends('layouts.dashboard',['title'=>'House Type'])
@section('dashboard')
<div class="card p-3">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="">Select the house type to be developed</label>
                <select class="form-control mt-2 mb-2" name="unit_type_p_dev" required="" style="width: 100%;">
                    <option value="">---Select Type---</option>
                    <option value="single unit">Single Unit</option>
                    <option value="Double Unit">Double Unit</option>
                    <option value="Bedsitters">Bedsitters</option>
                    <option value="One Bedroom">One Bedroom</option>
                    <option value="Two Bedrooms">Two Bedrooms</option>
                    <option value="Three Bedrooms">Three Bedrooms</option>
                    <option value="Bungallows">Bungallows</option>
                    <option value="Mansionattes">Mansionattes</option>
                    <option value="Offices">Offices</option>
                    <option value="Space Shops">Space Shops</option>
                    <option value="Warehouses And Go Downs">Warehouses And Go Downs</option>
                    <option value="AirBNBs">AirBNBs</option>
                    <option value="Hotels">Hotels</option>
                    <option value="Resort">Resort</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Guest Rooms">Guest Rooms</option>
                    <option value="Petrol Station">Petrol Station</option>
                    <option value="School">School</option>
                    <option value="Hostels">Hostels</option>
                </select>
            </div>
        </div>
    </form>
</div>
@endsection