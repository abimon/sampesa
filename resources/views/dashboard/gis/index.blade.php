@extends('layouts.dashboard',['title'=>'Projects'])
@section('dashboard')
<div class="container">
    <div class="row">
        @foreach ($projects as $key=>$project)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$project->project->title}}</b></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary"><i class="fa fa-location-dot"></i> <i>{{$project->project->county}}, {{$project->project->town}} {{$project->project->area}}</i></h6>
                    <p class="card-text"><div class="fa fa-calendar-day"></div> {{date_format(date_create($project->visit_date),'jS M, Y (l)')}}</p>

                    <div class="d-flex justify-content-end">
                    <!-- <a href="#" class="card-link btn btn-danger">Decline</a> -->
                    <a href="{{route('gis.show',$project->id)}}" class="card-link btn btn-primary">See Report</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection