@extends('layouts.dashboard',['title'=>'Tasks'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#task">
            Assign Task
        </button>
        <div class="modal fade" id="task" tabindex="-1" aria-labelledby="taskLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="taskLabel">Assign Task</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('task.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-2 row">
                                <div class="col-md-4">Task To</div>
                                <div class="col-md-8">
                                    <select name="to" id="" class="form-select form-control">
                                        @foreach (App\Models\User::where([['role','!=','Admin'],['role','!=','Director'],['role','!=','Client']])->select('fname','sname','id')->get() as $user)
                                        <option value="{{$user->id}}">{{$user->fname}} {{$user->fname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label for="task" class="col-md-4 text-capitalize">Task Title</label>
                                <input type="text" name="title" class="col-md-8 form-control">
                            </div>
                            <div class="mb-2 row">
                                <div class="col-md-4">Due Date</div>
                                <div class="col-md-8">
                                    <input type="date" name="due_date" id="" class="form-control">
                                </div>
                            </div>
                            <div class="mb-2 row">
                                <label class="col-md-4" for="">Task Description</label>
                                <textarea name="desc" id="" class="form-control col-md-8"></textarea>
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
    <div class="row">
        @foreach ($tasks as $task)
        <div class="col-lg-4 col-md-6 p-2 ">
            <div class="card h-100">
                <div class="card-body ">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-uppercase fw-bolder">{{$task->title}}</h5>
                        <div class="dropdown">
                            <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action<i class="bi bi-three-dots"></i>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#task{{$task->id}}">Edit</a></li>
                                <li>
                                    <form action="{{route('task.update',$task->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="submit" class="dropdown-item" value="{{$task->status=='Not completed'?'Completed':'Not Completed'}}" name="status">
                                    </form>
                                </li>
                                @if ($task->from==Auth()->user()->id)
                                <li>
                                    <form action="{{route('task.destroy',$task->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="dropdown-item text-danger" value="Delete">
                                    </form>
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="modal fade" id="task{{$task->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="roleLabel">Update a task</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('task.update',$task->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row mb-2">
                                                <div class="col-md-4">Task To</div>
                                                <div class="col-md-8">
                                                    <select name="" id="" class="form-select form-control">
                                                        @foreach (App\Models\User::where([['role','!=','Admin'],['role','!=','Director'],['role','!=','Client']])->select('fname','sname','id')->get() as $user)
                                                        <option value="{{$user->id}}" {{$user->id==$task->to?'selected':''}}>{{$user->fname}} {{$user->fname}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-md-4">Due Date</div>
                                                <div class="col-md-8">
                                                    <input type="date" value="{{$task->due_date}}" name="due-date" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <label for="location" class="col-md-4 text-capitalize">Task title</label>
                                                <input type="text" name="title" value={{$task->title}} class="col-md-8 form-control">
                                            </div>
                                            
                                            <div class="row mb-2">
                                                <label class="col-md-4" for="">Description</label>
                                                <textarea name="desc" id="" class="form-control col-md-8">{{$task->desc}}</textarea>
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
                    <div class="card-text">The task from <b>{{$task->assigner->fname}} {{$task->assigner->sname}}</b> is for <b>{{$task->assignee->fname}} {{$task->assignee->sname}}</b> to <b>{{$task->desc}}</b> before/by {{$task->due_date}} </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection