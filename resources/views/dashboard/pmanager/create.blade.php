@extends('layouts.dashboard',['title'=>'Create Project'])
@section('dashboard')
<div class="container" >
    <form action="{{route('project.store')}}" method="post">
        @csrf
        <h3>Project Typing</h3>
        <hr>
        <div class="row">
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Project Category</label>
                <select name="category" id="" class="col-md-8 form-control">
                    <option value="" selected disabled>----Select the category of the project----</option>
                    @foreach ($cats as $cat)
                    <option value="{{$cat}}" style="text-transform:capitalize;">{{$cat}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Project Title</label>
                <input type="text" name="title" id="" class="col-md-8 form-control">
            </div>
        </div>
        <h3>Client Profile</h3>
        <hr>
        <div class="row">
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Client's Name</label>
                <input type="text" name="client_name" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Client's Phone No.</label>
                <input type="text" name="client_contact" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Client's ID Number</label>
                <input type="text" name="client_id" id="" class="col-md-8 form-control">
            </div>
        </div>
        <hr>
        <h3>Project Location</h3>
        <hr>
        <div class="row">
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">County</label>
                <input type="text" name="county" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Town</label>
                <input type="text" name="town" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-6 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Common area name</label>
                <input type="text" name="area" id="" class="col-md-8 form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection