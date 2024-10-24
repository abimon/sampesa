@extends('layouts.dashboard',['title'=>'Projects'])
@section('dashboard')
<div class="d-flex justify-content-end">
    <a href="{{route('project.create')}}">
        <button class="btn btn-info mb-2">Create New Project</button>
    </a>
</div>
<div class="container">
    <table class="table table-responsive">
        <thead style="white-space: nowrap;">
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
            <tr style="white-space: nowrap;">
                <td>{{$key+1}}</td>
                <td>{{$project->title}}</td>
                <td class="text-capitalize">{{$project->category}}</td>
                <td>{{$project->client->fname.' '.$project->client->sname}}</td>
                <td>{{$project->client->contact}}</td>
                <td>{{$project->county}}, {{$project->town}}, {{$project->area}}</td>
                <td>{{$project->start_date}}</td>
                <td>{{$project->status}} Stage</td>
                <td>
                    <div class="dropdown">
                        <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action</div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#project{{$project->id}}">Edit</a></li>
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#project{{$project->id}}">Assign GIS</a></li>

                        </ul>
                    </div>
                </td>
            </tr>
            <div class="modal fade" id="project{{$project->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fs-5" id="roleLabel">Assign {{$project->title}} to GIS</h4>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('gis.store',['project_id'=>$project->id])}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="row mb-2">
                                    <label for="" class="col-md-4">GIS</label>
                                    <select name="user_id" id="" class="form-control col-md-8">
                                        <option value="" selected disabled>---Select GIS---</option>
                                        @foreach(App\Models\User::select('fname','sname','id')->get() as $user)
                                        <option value="{{$user->id}}">{{$user->fname.' '.$user->sname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-md-4">Visit Date</label>
                                    <input type="date" name="visit_date" id="" class="form-control col-md-8">
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
            @endforeach
        </tbody>
    </table>
</div>
@endsection