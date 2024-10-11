@extends('layouts.dashboard',['title'=>'Meetings'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#role">
            Schedule a Meeting
        </button>
        <div class="modal fade" id="role" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="roleLabel">Create a Meeting</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('meeting.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-2">
                                <label for="location" class="text-capitalize">Meeting title</label>
                                <input type="text" name="title"  class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md-4">Date</div>
                                <div class="col-md-8">
                                    <input type="date" name="date" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">Time</div>
                                <div class="col-md-8">
                                    <input type="time" name="time" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-4" for="">Description & Agenda</label>
                                <textarea name="jds" id="" class="form-control col-md-8"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($meetings as $meeting)
        <div class="col-lg-4 col-md-6 p-2 ">
            <div class="card h-100">
                <div class="card-body ">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-uppercase fw-bolder">{{$meeting->title}}</h5>
                        <div class="dropdown">
                            <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action<i class="bi bi-three-dots"></i>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#meeting{{$meeting->id}}">Edit</a></li>
                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#new">Assign</a></li>
                            </ul>
                        </div>
                        <div class="modal fade" id="role{{$meeting->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="roleLabel">Create a Meeting</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('meeting.update')}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="form-floating mb-2">
                                                <label for="location" class="text-capitalize">Meeting title</label>
                                                <input type="text" name="title" value={{$meeting->title}} class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Date</div>
                                                <div class="col-md-8">
                                                    <input type="date" value="{{$meeting->date}}" name="date" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">Time</div>
                                                <div class="col-md-8">
                                                    <input type="time" name="time" value="{{$meeting->time}}" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-4" for="">Description & Agenda</label>
                                                <textarea name="jds" id="" class="form-control col-md-8">{{$meeting->agenda}}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">{{$role->agenda}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection