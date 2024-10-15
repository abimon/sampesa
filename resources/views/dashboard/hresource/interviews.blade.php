@extends('layouts.dashboard',['title'=>'Interviews'])
@section('dashboard')
<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Position</th>
            <th>Interviewee's Name</th>
            <th>Interviewee's Email</th>
            <th>Interviewee's Contact</th>
            <th>Interview Date</th>
            <th>Interview Status</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($interviews as $key=>$interview)
            <tr>
                <td>{{$key+1}}</td>
                <td class="text-uppercase">{{$interview->application->vacancy->role->title}}</td>
                <td>{{$interview->application->applicant_name}}</td>
                <td>{{$interview->application->applicant_email}}</td>
                <td>{{$interview->application->applicant_contact}}</td>
                <td>{{date_format($interview->created_at,'jS F, Y')}}</td>
                <td>{{$interview->status}}</td>
                <td>
                    <button type="button" data-toggle="modal" data-target="#Interview{{$interview->id}}" class="btn btn-primary">Feedback</button>
                    <div class="modal fade" id="Interview{{$interview->id}}" tabindex="-1" aria-labelledby="InterviewLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="InterviewLabel">Edit {{$interview->application->applicant_name}}'s Application</h5>
                                    <button type="button" class="fa fa-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('interviews.update',$interview->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="row mb-2">
                                            <label for="location" class="col-md-4">Status</label>
                                            <select name="status" id="" class="form-control col-md-8">
                                                <option value="Hired" {{$interview->status=='Hired'?'selected':''}}>Hired</option>
                                                <option value="Rejected" {{$interview->status=='Rejected'?'selected':''}}>Rejected</option>
                                                <option value="Rescheduled" {{$interview->status=='Rescheduled'?'selected':''}}>Rescheduled</option>
                                                <option value="Scheduled" {{$interview->status=='Scheduled'?'selected':''}}>Scheduled</option>
                                            </select>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="" class="col-md-4">Message</label>
                                            <textarea name="message" class="form-control col-md-8">{{$interview->application->message}}</textarea>
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
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection