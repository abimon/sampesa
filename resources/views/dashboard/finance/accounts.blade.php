@extends('layouts.dashboard',['title'=>'Accounts'])
@section('dashboard')
<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Account</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($accounts as $account)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$account->name}}</td>
                <td><button class="btn btn-primary">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection