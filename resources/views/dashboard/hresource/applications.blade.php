@extends('layouts.dashboard',['title'=>'Applications'])
@section('dashboard')
<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Position</th>
            <th>Applicant's Name</th>
            <th>Applicant's Email</th>
            <th>Applicant's Contact</th>
            <th>Application Date</th>
            <th>Interview Status</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($applications as $key=>$app)
            <tr>
                <td>{{$key+1}}</td>
                <td class="text-uppercase">{{$app->vacancy->role->title}}</td>
                <td>{{$app->applicant_name}}</td>
                <td>{{$app->applicant_email}}</td>
                <td>{{$app->applicant_contact}}</td>
                <td>{{date_format($app->created_at,'jS F, Y')}}</td>

                <td>
                    @if(App\Models\interview::where('appication_id',$app->id)->first())
                    {{App\Models\interview::where('appication_id',$app->id)->first()->status}}
                    @else
                    <button class="btn btn-primary" data-toggle="modal" data-target="#interview">Schedule</button>
                    <div class="modal fade" id="interview" tabindex="-1" aria-labelledby="interviewLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title fs-5" id="interviewLabel">Schedule interview</h2>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('interviews.store')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="job_id" value="{{$app->id}}">
                                        <div class="row mb-2">
                                            <label for="" class="col-md-4">Interview Mode</label>
                                            <select name="mode" id="" required class="col-md-8 form-control">
                                                <option value="">----Select interview mode----</option>
                                                <option value="Online">Online</option>
                                                <option value="Physical">Physical</option>
                                            </select>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="" class="col-md-4">Interview Date</label>
                                            <input type='date' name="date" class="col-md-8 form-control" required>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="" class="col-md-4">Venue/Link</label>
                                            <input type='text' name="venue" class="col-md-8 form-control" required>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="" class="col-md-4">More details</label>
                                            <textarea name="details" required class="col-md-8 form-control"></textarea>
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
                    @endif
                </td>
                <td><a href="{{route('applications.show',$app->id)}}"><button class="btn btn-primary">View</button></a>
                </td>
                @if(Auth()->user()->email==$app->applicant_email)
                <td>
                    <form action="{{route('applications.destroy',$app->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" name="status" value="Delete">
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection