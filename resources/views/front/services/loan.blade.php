@extends('layouts.app',['title'=>$loan->title])
@section('content')
<div class="container">
    <div class="row">
        @if ($loan->photos->count()>0)
        <div class="col-md-4">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    @foreach ($loan->photos as $key=>$photo)
                    <button type="button" data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key==0?'active':''}}" aria-current="true" aria-label="Slide {{$key+1}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach ($loan->photos as $key=>$photo)
                    <div class="carousel-item {{$key==0?'active':''}}" style="height: 100%;">
                        <img src="{{asset('storage/loan/photos/'.$photo->file_path)}}" class="d-block" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span style="display: hidden;"></span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span style="display: hidden;"></span>
                </button>
            </div>
        </div>
        @endif
        <div class="col-md-8">
            <div class="p-2">
                <p style='font-weight:bold;'>Interest Rate: {{$loan->interest}}% Monthly for 3 to 24 Months</p>
                <p>{{$loan->desc}}</p>
                <div class="text-center">
                    <a class="btn btn-primary btn-sm" target="_top" href="{{route('loan_application.create',['loan'=>$loan->title])}}">APPLY &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection