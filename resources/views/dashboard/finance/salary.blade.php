@extends('layouts.dashboard',['title'=>'Salaries'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pay">
            Pay Salary
        </button>
        <div class="modal fade" id="pay" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="roleLabel">Create Salary Entry</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('salary.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Staff*</label>
                                <select name="user_id" id="" class="col-md-8 form-control" required>
                                    <option value="" selected disabled>----Select Staff----</option>
                                    @foreach (App\Models\User::where('role_id','!=','3')->select('fname','sname','id')->orderBy('fname','asc')->get() as $user)
                                    <option value="{{$user->id}}">{{$user->fname}} {{$user->sname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Amount</label>
                                <input type="number" name="amount" class="col-md-8 form-control" required>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Month*</label>
                                <select name="for" id="" class="col-md-8 form-control" required>
                                    <?php $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; ?>
                                    @foreach ($months as $month)
                                    <option value="{{$month.' '.date('Y')}}">{{$month.' '.date('Y')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Type*</label>
                                <select name="quest" id="" class="col-md-8 form-control" required>
                                    <option value="Emergency">Emergency</option>
                                    <option value="Advance">Advance</option>
                                    <option value="End Month">End Month</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">NSSF</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nssf" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">NHIF</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nhif" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Other Deductions</label>
                                    <input type="text" class="form-control" name="deductions" value="">
                                </div>
                                <div class="col-md-8">
                                    <label for="">Explanation</label>
                                    <textarea class="form-control" name="statement" rows="5" placeholder="Incase of any deductions please provide a short explanation."></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="status" value="Approved">
                        </div>
                        <p class="p-2">* Required fields</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-responsive">
        <thead>
            <th>#</th>
            <th>Staff</th>
            <th>Month</th>
            <th>Gross Salary</th>
            <th>Allowance</th>
            <th>NHIF</th>
            <th>NSSF</th>
            <th>PAYE</th>
            <th>Other Deductions</th>
            <th>Net Salary</th>
            <th>Logged By</th>
            <th colspan="3"></th>
        </thead>
        <tbody>
            @foreach ($salaries as $key=>$salary)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$salary->user->fname}} {{$salary->user->sname}}</td>
                <td>{{$salary->for}}</td>
                <td>{{$salary->quest}}</td>
                <td>{{$salary->amount}}</td>
                <td>{{$salary->deductions}}</td>
                <td>{{$salary->statement}}</td>
                <td>{{($salary->amount)-($salary->deductions)}}</td>
                <td>{{$salary->created_at}}</td>
                <td>{{$salary->logger->fname}} {{$salary->logger->sname}}</td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$salary->id}}">Edit</button>
                </td>
                <div class="modal fade" id="edit{{$salary->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Create Salary Entry</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('salary.update',$salary->id)}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Staff*</label>
                                        <select name="user_id" id="" class="col-md-8 form-control" required>
                                            <option value="" selected disabled>----Select Staff----</option>
                                            @foreach (App\Models\User::where('role','!=','Client')->select('fname','sname','id')->orderBy('fname','asc')->get() as $user)
                                            <option value="{{$user->id}}" {{$salary->user_id==$user->id?'selected':''}}>{{$user->fname}} {{$user->sname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Amount</label>
                                        <input type="number" name="amount" class="col-md-8 form-control" value={{$salary->amount}}>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Month*</label>
                                        <select name="for" id="" class="col-md-8 form-control" required>
                                            <?php $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; ?>
                                            @foreach ($months as $month)
                                            <option value="{{$month.' '.date('Y')}}" {{$month.' '.date('Y')==$salary->for?'selected':''}}>{{$month.' '.date('Y')}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Type*</label>
                                        <select name="quest" id="" class="col-md-8 form-control" required>
                                            <option value="Emergency" {{$salary->quest=='Emergency'?'selected':''}}>Emergency</option>
                                            <option value="Advance" {{$salary->quest=='Advance'?'selected':''}}>Advance</option>
                                            <option value="End Month" {{$salary->quest=='End Month'?'selected':''}}>End Month</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Total Deductions</label>
                                            <input type="text" class="form-control" name="deductions" value="{{$salary->deductions}}">
                                        </div>
                                        <div class="col-md-8">
                                            <label for="">Explanation</label>
                                            <textarea class="form-control" rows="5" placeholder="Incase of any deductions please provide a short explanation." name="statement">{{$salary->statement}}</textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="status" value="Approved">
                                </div>
                                <p class="p-2">* Required fields</p>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$salary->id}}">Delete</button>
                </td>

                <div class="modal fade" id="delete{{$salary->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Delete Salary Entry</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('salary.destroy',$salary->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <p class="p-2 text-danger">Are you sure you want to delete this salary entry?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
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