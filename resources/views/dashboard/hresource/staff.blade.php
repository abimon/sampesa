@extends('layouts.dashboard',['title'=>'Staffs'])
@section('dashboard')
<!-- Page Heading -->

<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Staff's Name</th>
            <th>Nationality</th>
            <th>Contact</th>
            <th>ID</th>
            <th>Role</th>
            <th>Address</th>
            <th>Change Role</th>
            <th>View Profile</th>
        </thead>
        <tbody>
            @foreach ($staffs as $key=>$staff)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$staff->fname}} {{$staff->sname}}</td>
                <td>{{$staff->nationality}}</td>
                <td>{{$staff->contact}}<br> <i>{{$staff->email}}</i></td>
                <td>{{$staff->idNumber}}</td>
                <td>{{$staff->role->title}}</td>
                <td>{{$staff->residence}}</td>
                <td>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#Staff{{$staff->id}}">
                        <i class="fas fa-plus fa-sm text-white-50"></i> Change Role
                    </a>
                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="Staff{{$staff->id}}" tabindex="-1" aria-labelledby="Staff{{$staff->id}}Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="Staff{{$staff->id}}Label">Change {{$staff->fname}} {{$staff->lname}}'s Role</h3>
                                    <button type="button" class="fa fa-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('user.update',$staff->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-floating">
                                            <select name="role_id" id="" class="form-select form-control">
                                                @foreach (App\Models\roles::where('dep_id','!=','1')->select('title','id')->get() as $role)
                                                <option value="{{$role->id}}" {{($staff->role_id==$role->id)?'selected':''}}>{{$role->title}}</option>
                                                @endforeach
                                            </select>
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
                <td>
                    <a href="{{route('user.show',$staff->id)}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" >
                        <i class="fas fa-eye fa-sm text-white-50"></i> View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection