@extends('layouts.dashboard',['title'=>'Profile'])
@section('dashboard')
<div class="row">
    <div class="col-md-5 p-3">
        <img src="{{asset('storage/users/passports/'.($user->pp_path))}}" style="height:60vh;width:100%;object-fit:cover" alt="">
    </div>
    <div class="col-md-6">
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-2">
                <label for="" class="col-4">Surname</label>
                <input type="text" class="col-8 form-control" name="sname" value="{{$user->sname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">First Name</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->fname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Middle Name</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->mname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Email</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->email}}">

            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Phone Number</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->contact}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">ID Number</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->idNumber}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">KRA PIN</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->krapin}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Address</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->address}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Residence</label>
                <input type="text" class="col-8 form-control" disabled value="{{$user->residence}}">
            </div>
        </form>
    </div>
    <div class="col-md-6 p-3">
        <img src="{{asset('storage/users/kraCerts/'.($user->kra_path))}}" style="height:50vh;width:100%;object-fit:cover" alt="">
        @if(Auth()->user()->role=='Admin' && $user->kra_approved==false)
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="kra_approved" value="1">
            <button type='submit' class="btn btn-success">Verify</button>
        </form>
        @elseif($user->kra_approved==false)
        <button class="btn btn-danger"><i class="fa fa-close"></i> Not Verified</button>
        @else
        <h4 class="text-success">Verified</h4>
        @endif
    </div>
    <div class="col-md-6 p-3">
        <img src="{{asset('storage/users/idCards/'.($user->id_path))}}" style="height:50vh;width:100%;object-fit:cover" alt="">
        @if(Auth()->user()->role=='Admin' && $user->id_approved==false)
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_approved" value="1">
            <button type='submit' class="btn btn-success">Verify</button>
        </form>
        @elseif($user->id_approved==false)
        <button class="btn btn-danger"><i class="fa fa-close"></i> Not Verified</button>
        @else
        <h4 class="text-success">Verified</h4>
        @endif
    </div>
</div>
@endsection