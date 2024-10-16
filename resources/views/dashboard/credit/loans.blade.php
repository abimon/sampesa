@extends('layouts.dashboard',['title'=>'Loans'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
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
    </div>
    <div class="row">
        @foreach ($loans as $key=>$loan)
        <div class="col-lg-4 col-md-6 p-2 ">
            <div class="card h-100">
                <div class="card-body ">
                    <img id="out" src="{{asset('storage/loan/covers/'.$loan->cover)}}" style="width: 100%; object-fit:contain;" />
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="card-title text-uppercase" style="font-weight:bold;">{{$loan->title}} Loan</h5>
                        <a href="" data-toggle="modal" data-target="#loan{{$loan->id}}">Edit</a>
                        <div class="modal fade" id="loan{{$loan->id}}" tabindex="-1" aria-labelledby="loanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5" id="loanLabel">Edit {{$loan->title}} Loan</h4>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('loan.update',$loan->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row mb-2">
                                                <label for="location" class="text-capitalize col-md-4">Loan Title</label>
                                                <input type="text" name="title" class="form-control col-md-8" value="{{$loan->title}}">
                                            </div>
                                            <div class="row mb-2">
                                                <label for="location" class="text-capitalize col-md-4">Interest Rate</label>
                                                <input type="number" step="0.1" name="interest" class="form-control col-md-8" value="{{$loan->interest}}">
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-4 mb-2">Loan Description</label>
                                                <textarea name="desc" id="editor0" class="form-control col-md-8 mb-2" rows="5">{{$loan->desc}}</textarea>
                                            </div>
                                            <div class="m-3 card p-3 border-dark bg-transparent" style="border-style:dashed;">
                                                <img id="out" src="{{asset('storage/loan/covers/'.$loan->cover)}}" style="width: 100%; object-fit:contain;" />
                                                <input type="file" accept="image/*" name="cover" id="cover" style="display: none;" class="form-control" onchange="loadCoverFile(event)">
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
                                                        var image = document.getElementById('out');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                        document.getElementById('cover').value == image.src;

                                                    };
                                                </script>
                                            </div>
                                            <div class="row">
                                                <label for="" class="col-md-4 mb-2">Loan Photo Files</label>
                                                <input type="file" name="photos[]" id="" class="form-control col-md-8" multiple>
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
                    <div class="card-text">
                        <p style="font-weight:bolder">Interest Rate: {{$loan->interest}}%</p>
                        <?php echo html_entity_decode($loan->desc); ?>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete{{$loan->id}}">Delete</button>
                        <div class="modal fade" id="delete{{$loan->id}}" tabindex="-1" aria-labelledby="loanLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title fs-5" id="loanLabel">Delete {{$loan->title}} Loan</h4>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{route('loan.destroy',$loan->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-body">
                                            <p class="p-2 text-danger fw-bold">Are you sure you want to delete {{$loan->title}} from the system?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection