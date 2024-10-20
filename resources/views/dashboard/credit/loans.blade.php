@extends('layouts.dashboard',['title'=>'Loans'])
@section('dashboard')
<div class="container">
    <!-- <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#loan">
            Add Loan
        </button>
        <div class="modal fade" id="loan" tabindex="-1" aria-labelledby="loanLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title fs-5" id="loanLabel">Create a Loan</h4>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('loan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row mb-2">
                                <label for="location" class="text-capitalize col-md-4">Loan Title</label>
                                <input type="text" name="title" class="form-control col-md-8">
                            </div>
                            <div class="row mb-2">
                                <label for="location" class="text-capitalize col-md-4">Interest Rate</label>
                                <input type="number" step="0.1" name="interest" class="form-control col-md-8">
                            </div>
                            <div class="row">
                                <label for="" class="col-md-4 mb-2">Loan Description</label>
                                <textarea name="desc" id="editor0" class="form-control col-md-8 mb-2" rows="5"></textarea>
                            </div>
                            <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                                <img id="out2" src="" style="width: 100%; object-fit:contain;" />
                                <input type="file" accept="image/*" name="cover" id="cover2" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
                                <div class="pt-2" id="desc">
                                    <div class="text-center" style="font-size: xxx-large; font-weight:bolder;">
                                        <i class="bi bi-upload"></i>
                                    </div>
                                    <div class="text-center">
                                        <label for="cover" class="btn btn-success text-white" title="Upload new profile image">Browse for Cover</label>
                                    </div>
                                    <div class="text-center prim">*File supported .png .jpg .webp</div>
                                </div>
                                <script>
                                    var loadCoverFile = function(event) {
                                        var image = document.getElementById('out2');
                                        image.src = URL.createObjectURL(event.target.files[0]);
                                        document.getElementById('cover2').value == image.src;

                                    };
                                </script>
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
    </div> -->
    <table class="table-responsive table">
        <thead>
            <th>#</th>
            @if (Auth()->user()->isAdmin)
            <th>Applicant's Name</th>
            <th>Applicant's Email</th>
            <th>Applicant's Contact</th>
            @endif
            <th>Loan Type</th>
            <th>Application Date</th>
            <th>Status</th>
        </thead>
        <tbody>
            @foreach ($loans as $key=>$loan)
            <tr>
                <td>{{$key+1}}</td>
                @if (Auth()->user()->isAdmin)
                <td>{{$loan->user->fname}} {{$loan->user->sname}}</td>
                <td>{{$loan->user->email}}</td>
                <td>{{$loan->user->contact}}</td>
                @endif
                <td>{{$loan->loan}}</td>
                <td>{{date_format($loan->created_at,'jS F, Y')}}</td>
                <td>{{$loan->status}}</td>
                <td>
                    <div class="dropdown">
                        <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action<i class="bi bi-three-dots"></i>
                        </div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#Role{{$loan->id}}">Update Status</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection