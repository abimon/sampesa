@extends('layouts.dashboard',['title'=>'Clients'])
@section('dashboard')
<!-- Page Heading -->

<div class="">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#Customers" data-toggle="collapse" data-target="#Customers" aria-expanded="false" aria-controls="flush-collapseOne">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Clients" data-toggle="collapse" data-target="#Clients" aria-expanded="false" aria-controls="flush-collapseOne">Clients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Investors" data-toggle="collapse" data-target="#Investors" aria-expanded="false" aria-controls="flush-collapseOne">Investors</a>
            </li>
        </ul>
        <!-- Customers -->
        <div class="accordion-item">
            <div id="Customers" class="accordion-collapse collapse show" data-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="container">
                        <table class="table table-responsive">
                            <thead>
                                <th>#</th>
                                <th>Customer's Name</th>
                                <th>Nationality</th>
                                <th>Contact</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Add Staff</th>
                                <th>View</th>
                            </thead>
                            <tbody>
                                @foreach ($clients->where('role_id','3') as $key=>$client)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$client->fname}} {{$client->sname}}</td>
                                    <td>{{$client->nationality}}</td>
                                    <td>{{$client->contact}}<br> <i>{{$client->email}}</i></td>
                                    <td>{{$client->idNumber}}</td>
                                    <td>{{$client->residence}}</td>
                                    <td style="min-width:160px;">
                                        <button class="btn btn-primary w-100" data-toggle="modal" data-target="#Staff{{$client->id}}">
                                            <i class="fas fa-plus fa-sm text-white-50"></i> Add to Staff
                                        </button>
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
                                                                <select name="role_id" id="" class="form-select form-control">
                                                                    @foreach (App\Models\roles::where('id','>',5)->select('title','id')->get() as $role)
                                                                    <option class='text-uppercase' value="{{$role->id}}">{{$role->title}}</option>
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
                                        <a href="{{route('user.show',$client->id)}}" >
                                            <button class="btn btn-primary w-100">View</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Customers -->
        <!-- Clients -->
        <div class="accordion-item">
            <div id="Clients" class="accordion-collapse collapse" data-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="container">
                        <table class="table table-responsive">
                            <thead>
                                <th>#</th>
                                <th>Client's Name</th>
                                <th>Nationality</th>
                                <th>Contact</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Add Staff</th>
                                <th>View</th>
                            </thead>
                            <tbody>
                                @foreach ($clients->where('role_id','4') as $key=>$client)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$client->fname}} {{$client->sname}}</td>
                                    <td>{{$client->nationality}}</td>
                                    <td>{{$client->contact}}<br> <i>{{$client->email}}</i></td>
                                    <td>{{$client->idNumber}}</td>
                                    <td>{{$client->residence}}</td>
                                    <td style="min-width:160px;">
                                        <button class="btn btn-primary w-100" data-toggle="modal" data-target="#Staff{{$client->id}}">
                                            <i class="fas fa-plus fa-sm text-white-50"></i> Add to Staff
                                        </button>
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
                                                                <select name="role_id" id="" class="form-select form-control">
                                                                    @foreach (App\Models\roles::select('title','id')->get() as $role)
                                                                    <option class='text-uppercase' value="{{$role->id}}">{{$role->title}}</option>
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
                                        <a href="{{route('user.show',$client->id)}}" >
                                            <button class="btn btn-primary w-100">View</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clients -->
        <!-- Investors -->
        <div class="accordion-item">
            <div id="Investors" class="accordion-collapse collapse" data-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="container">
                        <table class="table table-responsive">
                            <thead>
                                <th>#</th>
                                <th>Investor's Name</th>
                                <th>Nationality</th>
                                <th>Contact</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Add Staff</th>
                                <th>View</th>
                            </thead>
                            <tbody>
                                @foreach ($clients->where('role_id','5') as $key=>$client)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$client->fname}} {{$client->sname}}</td>
                                    <td>{{$client->nationality}}</td>
                                    <td>{{$client->contact}}<br> <i>{{$client->email}}</i></td>
                                    <td>{{$client->idNumber}}</td>
                                    <td>{{$client->residence}}</td>
                                    <td style="min-width:160px;">
                                        <button class="btn btn-primary w-100" data-toggle="modal" data-target="#Staff{{$client->id}}">
                                            <i class="fas fa-plus fa-sm text-white-50"></i> Add to Staff
                                        </button>
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
                                                                <select name="role_id" id="" class="form-select form-control">
                                                                    @foreach (App\Models\roles::select('title','id')->get() as $role)
                                                                    <option class='text-uppercase' value="{{$role->id}}">{{$role->title}}</option>
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
                                        <a href="{{route('user.show',$client->id)}}" >
                                            <button class="btn btn-primary w-100">View</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Investors -->
    </div>
</div>
@endsection