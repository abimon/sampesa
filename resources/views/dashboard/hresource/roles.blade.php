@extends('layouts.dashboard',['title'=>($department->title).' Positions'])
@section('dashboard')
<div class="container">
    <div class="d-flex justify-content-end mb-1">
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#role">
            Add Role
        </button>
        <div class="modal fade" id="role" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="roleLabel">Create a role</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('roles.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-floating mb-2">
                                <label for="location" class="text-capitalize">Role</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <label for="">Job Description</label>
                            <textarea name="job_description" id="editor0" class="form-control"></textarea>
                            <label for="">Job Requirements</label>
                            <textarea name="requirements" id="editor1" class="form-control"></textarea>
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
        @foreach ($department->roles as $role)
        <div class="col-lg-4 col-md-6 p-2 ">
            <div class="card h-100">
                <div class="card-body ">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-uppercase fw-bolder">{{$role->title}}</h5>
                        <div class="dropdown">
                            <div class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">Action<i class="bi bi-three-dots"></i>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#Role{{$role->id}}">Edit</a></li>
                                <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#Assign{{$role->id}}">Assign</a></li>
                                <li><a class="dropdown-item" href="{{route('department.show',$role->department->id)}}">View Department</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-text">
                        <?php echo html_entity_decode($role->job_description); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Role{{$role->id}}" tabindex="-1" aria-labelledby="roleLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="roleLabel">Edit {{$role->title}}</h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('roles.update',$role->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-floating mb-2">
                                <input type="text" name="title" value="{{$role->title}}" class="form-control">
                                <label for="location" class="text-capitalize">Role</label>
                            </div>
                            <div class="row">
                                <label class="col-md-4" for="">Description</label>
                                <textarea name="job_description" id="editor{{$role->id}}" class="form-control col-md-8">{{$role->job_description}}</textarea>
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
        <div class="modal fade" id="Assign{{$role->id}}" tabindex="-1" aria-labelledby="Assign{{$role->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="Assign{{$role->id}}Label">Assign {{$role->title}}ship</h3>
                        <button type="button" class="fa fa-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('staff.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" name="role_id" value="{{$role->id}}">
                                <label for="" class="col-md-4">Staff Name</label>
                                <select name="user_id" id="" class="col-md-8 form-select form-control">
                                    @foreach (App\Models\User::select('fname','sname','id')->get() as $user)
                                    <option class='text-uppercase' value="{{$user->id}}">{{$user->fname}} {{$user->sname}}</option>
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
        @endforeach
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/super-build/ckeditor.js"></script>
<script>
    var i = 2;
    for (j = 0; j < i; j++) {
        CKEDITOR.ClassicEditor
            .create(document.getElementById("editor" + j), {
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        },
                        {
                            model: 'heading3',
                            view: 'h3',
                            title: 'Heading 3',
                            class: 'ck-heading_heading3'
                        },
                        {
                            model: 'heading4',
                            view: 'h4',
                            title: 'Heading 4',
                            class: 'ck-heading_heading4'
                        },
                        {
                            model: 'heading5',
                            view: 'h5',
                            title: 'Heading 5',
                            class: 'ck-heading_heading5'
                        },
                        {
                            model: 'heading6',
                            view: 'h6',
                            title: 'Heading 6',
                            class: 'ck-heading_heading6'
                        }
                    ]
                },

                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [{
                        name: /.*/,
                        attributes: true,
                        classes: true,
                        styles: true
                    }]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [{
                        marker: '@',
                        feed: [
                            '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                            '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                            '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                            '@sugar', '@sweet', '@topping', '@wafer'
                        ],
                        minimumCharacters: 1
                    }]
                },
                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                ]
            }).then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('min-height', '60vh', editor.editing.view.document.getRoot());
                    writer.setStyle('background-color', 'transparent', editor.editing.view.document.getRoot());
                });
            });
    }
</script>
@endsection