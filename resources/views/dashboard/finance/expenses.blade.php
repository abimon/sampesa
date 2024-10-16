@extends('layouts.dashboard',['title'=>'Expenses'])
@section('dashboard')
<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Reason</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Logged By</th>
        </thead>
        <tbody>
            @foreach ($expenses as $key=>$expense)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$expense->reason}}</td>
                <td>{{$expense->amount}}</td>
                <td>{{$expense->created_at}}</td>
                <td>{{$expense->loggedBy}}</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection