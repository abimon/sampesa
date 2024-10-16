@extends('layouts.dashboard',['title'=>'Income'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pay">
            Record Income
        </button>
        <div class="modal fade" id="pay" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="roleLabel">Create Salary Entry</h1>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                    </div>
                    <form action="{{route('income.store')}}" method="post" class="container p-2">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Amount</label>
                                <input type="number" name="amount" class="col-md-8 form-control" required>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Source</label>
                                <select name="source" id="" class="col-md-8 form-control" required>
                                    <option value="Client Payment">Client Payment</option>
                                    <option value="Rental">Rental</option>
                                    <option value="Grant">Grant</option>
                                    <option value="Loan">Loan</option>
                                    <option value="Membership">Membership</option>
                                    <option value="Financing">Financing</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="row">
                                <label class="col-md-4">Description</label>
                                <textarea name="desc" id="" rows="5" class="form-control col-md-8" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table ">
        <thead>
            <th>#</th>
            <th>Source</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Logged By</th>
        </thead>
        <tbody>
            @foreach ($incomes as $key=>$income)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$income->source}}</td>
                <td>{{$income->amount}}</td>
                <td>{{$income->created_at}}</td>
                <td>{{$income->loggedBy}}</td>
                <td><button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$income->id}}">Edit</button></td>
                <td><button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$income->id}}">Delete</button></td>
                <div class="modal fade" id="edit{{$income->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Record Income</h1>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                            </div>
                            <form action="{{route('income.store')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Amount</label>
                                        <input type="number" name="amount" class="col-md-8 form-control" value={{$income->amount}}>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Source</label>
                                        <select name="source" id="" class="col-md-8 form-control">
                                            <option value="Client Payment" {{$income->source=='Client Payment'?'selected':''}}>Client Payment</option>
                                            <option value="Rental" {{$income->source=='Rental'?'selected':''}}>Rental</option>
                                            <option value="Grant" {{$income->source=='Grant'?'selected':''}}>Grant</option>
                                            <option value="Loan" {{$income->source=='Loan'?'selected':''}}>Loan</option>
                                            <option value="Financing" {{$income->source=='Financing'?'selected':''}}>Financing</option>
                                            <option value="Membership" {{$income->source=='Membership'?'selected':''}}>Membership</option>
                                            <option value="Other" {{$income->source=='Other'?'selected':''}}>Other</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label class="col-md-4">Description</label>
                                        <textarea name="desc" id="" class="form-control col-md-8">{{$income->desc}}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="delete{{$income->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Delete Record</h1>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                            </div>
                            <form action="{{route('income.destroy',$income->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <p class="text-danger">Are you sure you want to delete this income entry of {{$income->amount}} from {{$income->source}}?</p>
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