@extends('layouts.dashboard',['title'=>'Departments'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#department">
            Add Department
        </button>
        <div class="modal fade" id="department" tabindex="-1" aria-labelledby="departmentLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="departmentLabel">Create a department</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('department.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="location" class="col-md-4 text-capitalize">Department Title</label>
                                <input type="text" name="title" class="col-md-8 form-control">
                            </div>
                            <div class="row mb-2">
                                <label for="location" class="col-md-4 text-capitalize">Category</label>
                                <select name="type" id="" class="col-md-8 form-control">
                                    <option value="Professional">Professional</option>
                                    <option value="Casual">Casual</option>
                                </select>
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
    <table class="table table-responsive" style="max-height: 60vh; overflow:scroll;">
        <thead>
            <th>#</th>
            <th>Department</th>
            <th>Category</th>
            <th>Positions</th>
            <th colspan="2" class="text-center">Actions</th>
        </thead>
        <tbody>
            @foreach ($deps as $key=>$dep)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$dep->title}}</td>
                <td>{{$dep->type}}</td>
                <td>{{$dep->roles->count()}}</td>
                <td>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#dep{{$dep->id}}">Edit</a>
                </td>
                <td>
                    <a class="btn btn-info" href="{{route('department.show',$dep->id)}}">View Positions</a>
                </td>
                <div class="modal fade" id="dep{{$dep->id}}" tabindex="-4" aria-labelledby="roleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="roleLabel">Edit {{$dep->title}}</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('department.update',$dep->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row mb-2">
                        <label for="title" class="col-md-4 text-capitalize">Department Title</label>
                        <input type="text" name="title" value="{{$dep->title}}" class="col-md-8 form-control">
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-md-4">Category</label>
                        <select name="category" id="" class="col-md-8 form-control">
                        <option value="Administrative" {{$dep->category=='Administrative'?'selected':''}}>Administrative</option>
                            <option value="Professional" {{$dep->category=='Professional'?'selected':''}}>Professional</option>
                            <option value="Casual" {{$dep->category=='Casual'?'selected':''}}>Casual</option>
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
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
