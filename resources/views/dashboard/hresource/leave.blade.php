@extends('layouts.dashboard',['title'=>'Leaves'])
@section('dashboard')
<div class="container">
<div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#leave">
            Add Leave
        </button>
        <div class="modal fade" id="leave" tabindex="-1" aria-labelledby="leaveLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="leaveLabel">Add Leave</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('leave.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="location" class="text-capitalize col-md-4">Staff's Name</label>
                                <select name="user_id" id="" class="form-control col-md-8">
                                    <option value="" selected disabled>----Select staff----</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->fname}} {{$user->sname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="location" class="text-capitalize col-md-4">Leave type</label>
                                <select name="user_id" id="" class="form-control col-md-8">
                                    <option value="" selected disabled>----Select leave type----</option>
                                    
                                    @foreach ($types as $type)
                                    <option value="{{$type}}">{{$type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Leave start</label>
                            <input type='date' name="l_date" id="editor0" class="col-md-8 form-control">
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Leave end</label>
                            <input type='date' name="r_date" id="editor1" class="col-md-8 form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-responsive w-100">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Position</th>
            <th>Type</th>
            <th>Leave Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($leaves as $key=>$leave)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$leave->user->fname}} {{$leave->user->sname}}</td>
                <td>{{$leave->user->role}}</td>
                <td>{{$leave->type}}</td>
                <td>{{$leave->l_date}}</td>
                <td>{{$leave->r_date}}</td>
                <td>{{$leave->status}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection