@extends('layouts.dashboard',['title'=>'Vacancies'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#vacancy">
            Add Vacancy
        </button>
        <div class="modal fade" id="vacancy" tabindex="-1" aria-labelledby="vacancyLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="vacancyLabel">Add vacancy</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('vacancy.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="location" class="text-capitalize col-md-4">Create Advert</label>
                                <select name="role_id" id="" class="form-control col-md-8">
                                    <option value="" selected disabled>----Select position----</option>
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}" class="text-uppercase">{{$role->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Available Positions</label>
                                <input type='number' name="openings" class="col-md-8 form-control">
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Application Mode</label>
                                <select name="app_mode" id="" class="col-md-8 form-control">
                                    <option value="">----Select application mode----</option>
                                    <option value="Online Form">Online Form</option>
                                    <option value="Physical Submission">Physical Submission</option>
                                    <option value="Both Online and Physical">Both Online and Physical</option>
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Closing Date</label>
                                <input type='date' name="deadline" class="col-md-8 form-control">
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
            <th>Position</th>
            <th>Openings</th>
            <th>Application Mode</th>
            <th>Deadline</th>
            <th>Applications</th>
            <th>Status</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($vacancies as $key=>$vacancy)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$vacancy->role->title}}</td>
                <td>{{$vacancy->openings}}</td>
                <td>{{$vacancy->app_mode}}</td>
                <td>{{date_format(date_create($vacancy->deadline),'jS F, Y')}}</td>
                <td>{{(App\Models\application::where('vacancy_id',$vacancy->id))->count()}}</td>
                <td>{{$vacancy->status}}</td>
                <td>
                    <form action="{{route('vacancy.update',$vacancy->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <input class="btn {{$vacancy->status=='Open'?'btn-warning':'btn-info'}}" type="submit" name="status" value="{{$vacancy->status=='Open'?'Close':'Open'}}">
                    </form>
                </td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td>
                    <form action="{{route('vacancy.destroy',$vacancy->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" name="status" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection