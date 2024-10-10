@extends('layouts.dashboard',['title'=>'Clients'])
@section('dashboard')
<!-- Page Heading -->
<div class="container">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Client's Name</th>
            <th>Nationality</th>
            <th>Contact</th>
            <th>ID</th>
            <th>Address</th>
        </thead>
        <tbody>
            @foreach ($clients as $key=>$client)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$client->fname}} {{$client->lname}}</td>
                <td>{{$client->nationality}}</td>
                <td>{{$client->contact}}<br> <i>{{$client->email}}</i></td>
                <td>{{$client->idNumber}}</td>
                <td>{{$client->residence}}</td>
                <td>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#Staff{{$client->id}}">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Add to Staff
                    </a>
                    <!-- Button trigger modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="Staff{{$client->id}}" tabindex="-1" aria-labelledby="Staff{{$client->id}}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="Staff{{$client->id}}Label">Add {{$client->fname}} {{$client->lname}} to Staff</h3>
                                    <button type="button" class="fa fa-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.update',$client->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-floating">
                                            <select name="role" id="" class="form-select form-control">
                                                @foreach (App\Models\roles::select('title')->get() as $role)
                                                <option value="{{$role->title}}">{{$role->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{route('user.show',$client->id)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >
                        <i class="fas fa-eye fa-sm text-white-50"></i> View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection