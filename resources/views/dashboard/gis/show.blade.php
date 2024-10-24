@extends('layouts.dashboard',['title'=>$project->title])
@section('dashboard')
<div class="mb-2">
    <a href="{{route('gis.index')}}"><button class="btn btn-primary">< Back</button></a>
</div>
<div class="card p-3">
    <div class="row">
        <div class="col-md-6 mb-2">
            <a href="{{route('status.index',['id'=>$project->id])}}">
                <div class="alert {{$project->feasibility!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 1: Property Status Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('ownership.index',['id'=>$project->id])}}">
                <div class="alert {{$project->ownership!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 2: Property Ownership Report</b>
                </div>
            </a>
        </div>

        <div class="col-md-6 mb-2">
            <a href="{{route('current_development.index',['id'=>$project->id])}}">
                <div class="alert {{$project->cdev!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 3: Current Development Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('utility.index',['id'=>$project->id])}}">
                <div class="alert {{$project->sutility!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 4: Services & Utilities Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('amenities.index',['id'=>$project->id])}}">
                <div class="alert {{$project->amenity!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 5: Social Amenities Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('geoinfo.index',['id'=>$project->id])}}">
                <div class="alert {{$project->geoinfo!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 6: Geospatial Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('devnature.index',['id'=>$project->id])}}">
                <div class="alert {{$project->nature!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 7: Development Nature Report</b>
                </div>
            </a>
        </div>
        <div class="col-md-6 mb-2">
            <a href="{{route('development_type.index',['id'=>$project->id])}}">
                <div class="alert {{$project->devtype!=null?'alert-success':'alert-danger'}}">
                    <i class="fa fa-folder-open"></i>
                    <b>Step 8: Development Type Report</b>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection