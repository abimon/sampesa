@extends('layouts.app',['title'=>'Step-two'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Complete your profile') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.update',Auth()->user()->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h3 class="text-start">Personal Information</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6 row mb-3">
                        <label for="">Passport Photo</label>
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
                    <div class="col-md-6 row mb-3">
                        <label for="idCard">ID Card Scan</label>
                        <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                            <img id="outCard" src="{{asset('storage/users/idCards/'.Auth()->user()->id_path)}}" style="width: 100%; object-fit:contain;" />
                            <input type="file" accept="image/*" name="idCard" id="idCard" style="display: none;" class="form-control" onchange="loadidCardFile(event)">
                            <div class="pt-2" id="desc">
                                <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                    <i class="bi bi-upload"></i>
                                </div>
                                <div class="text-center">
                                    <label for="idCard" class="btn btn-success text-white" title="Upload new profile image">Browse</label>
                                </div>
                                <div class="text-center prim">*File supported .png .jpg .webp</div>
                            </div>
                            <script>
                                var loadidCardFile = function(event) {
                                    var image = document.getElementById('outCard');
                                    image.src = URL.createObjectURL(event.target.files[0]);
                                    document.getElementById('idCard').value == image.src;

                                };
                            </script>
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="kraCert" class="col-md-4 col-form-label text-md-end">{{ __('KRA Certificate') }}</label>

                        <div class="col-md-8">
                            <input id="kraCert" type="file" class="form-control @error('kraCert') is-invalid @enderror" name="kraCert" value="{{ old('kraCert') }}" required autocomplete="" autofocus accept=".pdf">

                            @error('kraCert')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Finish
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection