@extends('layouts.dashboard',['title'=>$app->applicant_name.' Application'])
@section('dashboard')
<div class="container">
    <h4 class="text-uppercase" style="color:black; font-weight:bold;">Position: {{$app->vacancy->role->title}}</h4>
    <h5>Personal Details</h5>
    <hr>
    <div class="row">
        <div class="col-md-3">Name: <br> {{$app->applicant_name}}</div>
        <div class="col-md-3">Email: <br> {{$app->applicant_email}}</div>
        <div class="col-md-3">Contact: <br> {{$app->applicant_contact}}</div>
        <div class="col-md-3">Nationality: <br> {{$app->nationality}}</div>
    </div>
    <hr>
    <h5>Address and Residence</h5>
    <hr>
    <div class="row">
        <div class="col-md-6">Residence: <br>{{$app->residence}}</div>
        <div class="col-md-6">Address: <br>{{$app->address}}</div>
    </div>
    <hr>
    <h5>Cover Letter</h5>
    <hr>
    <div class="card p-3"><?php echo html_entity_decode($app->cover_letter);?></div>
    <hr>
    <h5>Curriculum Vitae</h5>
    <div>
        <iframe src="/storage/cvs/{{$app->cv}}" frameborder="0" style="width: 60vw; height:100vh;"></iframe>
        <!-- <embed src="" type="pdf"> -->
    </div>
</div>
@endsection