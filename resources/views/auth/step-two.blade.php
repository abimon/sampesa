@extends('layouts.app',['title'=>'Step-two'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Complete your profile') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('user.update',Auth()->user()->id) }}">
                @csrf
                @method('PUT')
                <div class="row">
                    <h2 class="text-center">Personal Information</h2>
                    <hr>
                    <div class="col-md-6 row mb-3">
                        <label for="sname" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                        <div class="col-md-8">
                            <input id="sname" type="text" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" required autocomplete="sname" autofocus>

                            @error('sname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                        <div class="col-md-8">
                            <input id="fname" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="mname" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }} <i>[Optional]</i></label>

                        <div class="col-md-8">
                            <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                            @error('mname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                        <div class="col-md-8">
                            <select name="gender" id="" class="form-select" required>
                                <option value="">-----------Select Gender-----------</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth()->user()->email}}" required autocomplete="email" disabled>
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                        <div class="col-md-8">
                            <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="idNumber" class="col-md-4 col-form-label text-md-end">{{ __('ID/Passport Number') }}</label>

                        <div class="col-md-8">
                            <input id="idNumber" type="number" class="form-control @error('idNumber') is-invalid @enderror" name="idNumber" value="{{ old('idNumber') }}" required autocomplete="idNumber" autofocus>

                            @error('idNumber')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="krapin" class="col-md-4 col-form-label text-md-end">{{ __('KRA PIN') }}</label>

                        <div class="col-md-8">
                            <input id="krapin" type="text" class="form-control @error('krapin') is-invalid @enderror" name="krapin" value="{{ old('krapin') }}" required autocomplete="krapin" autofocus>

                            @error('krapin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center">Postal Address</h2>
                    <hr>
                    <div class="col-md-6 row mb-3">
                        <label for="p_address" class="col-md-4 col-form-label text-md-end">{{ __('Postal Address') }}</label>

                        <div class="col-md-8">
                            <input id="p_address" type="number" class="form-control @error('p_address') is-invalid @enderror" name="p_address" value="{{ old('p_address') }}" required autocomplete="p_address" autofocus>

                            @error('p_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="p_code" class="col-md-4 col-form-label text-md-end">{{ __('Postal Code') }}</label>

                        <div class="col-md-8">
                            <input id="p_code" type="number" class="form-control @error('p_code') is-invalid @enderror" name="p_code" value="{{ old('p_code') }}" required autocomplete="p_code" autofocus>

                            @error('p_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="p_town" class="col-md-4 col-form-label text-md-end">{{ __('Postal Town') }}</label>

                        <div class="col-md-8">
                            <input id="p_town" type="text" class="form-control @error('p_town') is-invalid @enderror" name="p_town" value="{{ old('p_town') }}" required autocomplete="p_town" autofocus>

                            @error('p_town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="text-center">Physical Address</h2>
                    <hr>
                    <div class="col-md-6 row mb-3">
                        <label for="nationality" class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>

                        <div class="col-md-8">
                            <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>

                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="county" class="col-md-4 col-form-label text-md-end">{{ __('County/State') }}</label>

                        <div class="col-md-8">
                            <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="county" autofocus>

                            @error('county')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="town" class="col-md-4 col-form-label text-md-end">{{ __('Town') }}</label>

                        <div class="col-md-8">
                            <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ old('town') }}" required autocomplete="town" autofocus>

                            @error('town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Save & Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection