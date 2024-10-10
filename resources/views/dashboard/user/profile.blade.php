@extends('layouts.dashboard',['title'=>'Profile'])
@section('dashboard')
<div class="row">
    <div class="col-md-5 p-3">
        <img src="{{asset('storage/users/passports/'.(Auth()->user()->pp_path))}}" style="height:60vh;width:100%;object-fit:cover" alt="">
        <!-- Button trigger modal -->
        <div class="text-center">
            <button type="button" class="mt-2 btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                Change
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Avatar</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('user.update',Auth()->user()->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                                <img id="out" src="{{asset('storage/users/passports/'.Auth()->user()->pp_path)}}" style="width: 100%; object-fit:contain;" />
                                <input type="file" accept="image/*" name="passport" id="cover" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
                                <div class="pt-2" id="desc">
                                    <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                        <i class="bi bi-upload"></i>
                                    </div>
                                    <div class="text-center">
                                        <label for="cover" class="btn btn-success text-white" title="Upload new profile image">Browse</label>
                                    </div>
                                    <div class="text-center prim">*File supported .png .jpg .webp</div>
                                </div>
                                <script>
                                    var loadCoverFile = function(event) {
                                        var image = document.getElementById('out');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                        document.getElementById('cover').value == image.src;

                                    };
                                </script>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <form action="{{route('user.update',Auth()->user()->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-2">
                <label for="" class="col-4">Surname</label>
                <input type="text" class="col-8 form-control" name="sname" value="{{Auth()->user()->sname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">First Name</label>
                <input type="text" class="col-8 form-control" name="fname" value="{{Auth()->user()->fname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Middle Name</label>
                <input type="text" class="col-8 form-control" name="mname" value="{{Auth()->user()->mname}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Email</label>
                <input type="text" class="col-8 form-control" name="email" value="{{Auth()->user()->email}}">

            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Phone Number</label>
                <input type="text" class="col-8 form-control" name="contact" value="{{Auth()->user()->contact}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">ID Number</label>
                <input type="text" class="col-8 form-control" name="idNumber" value="{{Auth()->user()->idNumber}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">KRA PIN</label>
                <input type="text" class="col-8 form-control" name="krapin" value="{{Auth()->user()->krapin}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Address</label>
                <input type="text" class="col-8 form-control" disabled value="{{Auth()->user()->address}}">
            </div>
            <div class="row mb-2">
                <label for="" class="col-4">Residence</label>
                <input type="text" class="col-8 form-control" disabled value="{{Auth()->user()->residence}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-success">Update</button>
            </div>
        </form>
    </div>
    <div class="col-md-6 p-3">
        <img src="{{asset('storage/users/kraCerts/'.(Auth()->user()->kra_path))}}" style="height:50vh;width:100%;object-fit:cover" alt="">
        @if(Auth()->user()->role=='Admin' && Auth()->user()->kra_approved==false)
        <form action="{{route('user.update',Auth()->user()->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="kra_approved" value="1">
            <button type='submit' class="btn btn-success">Verify</button>
        </form>
        @elseif(Auth()->user()->kra_approved==false)
        <button class="btn btn-danger"><i class="fa fa-close"></i> Not Verified</button>
        @else
        <h4 class="text-success">Verified</h4>
        @endif
    </div>
    <div class="col-md-6 p-3">
        <img src="{{asset('storage/users/idCards/'.(Auth()->user()->id_path))}}" style="height:50vh;width:100%;object-fit:cover" alt="">
        @if(Auth()->user()->role=='Admin' && Auth()->user()->id_approved==false)
        <form action="{{route('user.update',Auth()->user()->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_approved" value="1">
            <button type='submit' class="btn btn-success">Verify</button>
        </form>
        @elseif(Auth()->user()->id_approved==false)
        <button class="btn btn-danger"><i class="fa fa-close"></i> Not Verified</button>
        @else
        <h4 class="text-success">Verified</h4>
        @endif
    </div>
    <a href="/update_docs" class="'text-center"><button class="btn btn-primary">Update Documents</button></a>
</div>
@endsection