@extends('layouts.dashboard',['title'=>'Applications'])
@section('dashboard')
<div class="container">
    <table class="table table-responsive w-100">
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Position</th>
            <th>Application Date</th>
            <th>Status</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @foreach ($vacancies as $key=>$app)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$app->applicant_name}}</td>
                <td>{{$app->applicant_email}}</td>
                <td>{{$app->applicant_contact}}</td>
                <td>{{$app->vacancy->role->title}}</td>
                <td>{{date_format($app->created_at,'jS F, Y')}}</td>
                <td>{{$app->status}}</td>
                <td>
                    <form action="{{route('application.update',$app->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <input class="btn {{$app->status=='Open'?'btn-warning':'btn-info'}}" type="submit" name="status" value="{{$app->status=='Open'?'Close':'Open'}}">
                    </form>
                </td>
                <td><button class="btn btn-primary">Edit</button></td>
                @if(Auth()->user()->email==$app->applicant_email)
                <td>
                    <form action="{{route('application.destroy',$app->id)}}" method="post">
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