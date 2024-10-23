@extends('layouts.dashboard',['title'=>'Staffs'])
@section('dashboard')
<!-- Page Heading -->

<div class="container">
    <table class="table table-responsive">
        <thead style="white-space:nowrap;">
            <th>#</th>
            <th>Staff's Name</th>
            <th>Gross staff</th>
            <th>Allowance</th>
            <th>NHIF</th>
            <th>NSSF</th>
            <th>PAYE</th>
            <th>Other Deductions</th>
            <th>Net Salary</th>
            <th>Bank</th>
            <th>Bank Account</th>
            <th colspan="3" class="text-center">Actions</th>
        </thead>
        <tbody>
            @foreach ($staffs as $key=>$staff)
            <tr style="white-space:nowrap;">
                <td>{{$key+1}}</td>
                <td>{{$staff->user->fname.' '.$staff->user->sname}}</td>
                <td>{{number_format($staff->gross)}}</td>
                <td>{{number_format($staff->Allowance)}}</td>
                <td>{{number_format($staff->NHIF)}}</td>
                <td>{{number_format($staff->NSSF)}}</td>
                <td>{{number_format($staff->PAYE)}}</td>
                <td>{{number_format($staff->Other)}}</td>
                <td>{{number_format(($staff->gross+$staff->Allowance)-($staff->NHIF+$staff->NSSF+$staff->PAYE+$staff->Other))}}</td>
                <td>{{$staff->bank}}</td>
                <td>{{$staff->account}}</td>
                <td>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#edit{{$staff->id}}">Edit</button>
                </td>
                <div class="modal fade" id="edit{{$staff->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Edit Staff</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('staff.update',$staff->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Gross Salary</label>
                                        <input type="text" name="gross" value="{{$staff->gross}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Allowance</label>
                                        <input type="text" name="Allowance" value="{{$staff->Allowance}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">NHIF</label>
                                        <input type="text" name="NHIF" value="{{$staff->NHIF}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">NSSF</label>
                                        <input type="text" name="NSSF" value="{{$staff->NSSF}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">PAYE</label>
                                        <input type="text" name="PAYE" value="{{$staff->PAYE}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Other Deductions</label>
                                        <input type="text" name="Other" value="{{$staff->Other}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Bank Name</label>
                                        <input type="text" name="bank" value="{{$staff->bank}}" id="" class="form-control col-md-8">
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-md-4">Account No.</label>
                                        <input type="text" name="account" value="{{$staff->account}}" id="" class="form-control col-md-8">
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
                <td>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$staff->id}}">Delete</button>
                </td>

                <div class="modal fade" id="delete{{$staff->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="roleLabel">Remove Staff</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('staff.destroy',$staff->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    <p class="p-2 text-danger">Are you sure you want to remove this staff member from the system?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <td>
                    <a href="{{route('user.show',$staff->id)}}" class="btn btn-primary" > View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection