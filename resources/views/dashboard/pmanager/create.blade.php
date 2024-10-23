@extends('layouts.dashboard',['title'=>'Create Project'])
@section('dashboard')
<div class="container" >
    <form action="{{route('project.store')}}" method="post">
        @csrf
        
        <div class="row">
            <div class="col-md-4 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Project Category</label>
                <select name="category" id="" class="col-md-8 form-control">
                    <option value="" selected disabled>----Select the category of the project----</option>
                    @foreach ($cats as $cat)
                    <option value="{{$cat}}" style="text-transform:capitalize;">{{$cat}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Project Title</label>
                <input type="text" name="title" id="" class="col-md-8 form-control">
            </div>
            <div class="col-md-4 row mb-2">
                <label for="" class="col-md-4" style="text-align:right;">Client</label>
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