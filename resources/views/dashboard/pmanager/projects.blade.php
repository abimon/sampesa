@extends('layouts.dashboard',['title'=>'Projects'])
@section('dashboard')
<div class="d-flex justify-content-end">
    <a href="{{route('project.create')}}">
        <button class="btn btn-info mb-2">Create New Project</button>
    </a>
</div>
<div class="container">
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Project Title</th>
            <th>Project Category</th>
            <th>Client Name</th>
            <th>Client Contact</th>
            <th>Project Location</th>
            <th>Start Date</th>
            <th>Project Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($projects as $key=>$project)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$project->title}}</td>
                <td class="text-capitalize">{{$project->category}}</td>
                <td>{{$project->client_name}}</td>
                <td>{{$project->client_contact}}</td>
                <td>{{$project->county}}, {{$project->town}}, {{$project->area}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->status}}</td>
                <td>
                    <div class="dropdown">
                        <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action<i class="bi bi-three-dots"></i>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#project{{$projet->id}}">Edit</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#new">Assign GIS</a></li>
                            <div class="modal fade" id="project{{$projet->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="roleLabel">Assign {{$project->title}} to GIS</h1>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{route('gis.store',['project_id'=>$project->id])}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-floating mb-2">
                                                    <label for="location" class="text-capitalize">Role</label>
                                                    <input type="text" name="title" class="form-control">
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
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection