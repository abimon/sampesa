@extends('layouts.app',['title'=>'Step-two'])

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header text-uppercase">{{ __('Application for '.($job->role->title).' Position') }}</div>
        <div class="card-body">
            <form method="post" action="/apply" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="job_id" value="{{$job->id}}">
                <h3 class="text-start">Personal Information</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6 row mb-3">
                        <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('Full Name') }}</label>

                        <div class="col-md-8">
                            <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                        <div class="col-md-8">
                            <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <h3 class="text-start">Postal Address</h3>
                <hr>
                <div class="row">

                    <div class="col-md-6 row mb-3">
                        <label for="p_address" class="col-md-4 col-form-label text-md-end">{{ __('Postal Address') }}</label>

                        <div class="col-md-8">
                            <input id="p_address" type="number" class="form-control @error('p_address') is-invalid @enderror" name="p_address" value="{{ old('p_address') }}" required autocomplete="p_address" autofocus>

                            @error('p_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="p_code" class="col-md-4 col-form-label text-md-end">{{ __('Postal Code') }}</label>

                        <div class="col-md-8">
                            <input id="p_code" type="number" class="form-control @error('p_code') is-invalid @enderror" name="p_code" value="{{ old('p_code') }}" required autocomplete="p_code" autofocus>

                            @error('p_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="p_town" class="col-md-4 col-form-label text-md-end">{{ __('Postal Town') }}</label>

                        <div class="col-md-8">
                            <input id="p_town" type="text" class="form-control @error('p_town') is-invalid @enderror" name="p_town" value="{{ old('p_town') }}" required autocomplete="p_town" autofocus>

                            @error('p_town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <h3 class="text-start">Physical Address</h3>
                <hr>
                <div class="row mb-3">

                    <div class="col-md-6 row mb-3">
                        <label for="nationality" class="col-md-4 col-form-label text-md-end">{{ __('Nationality') }}</label>

                        <div class="col-md-8">
                            <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>

                            @error('nationality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="county" class="col-md-4 col-form-label text-md-end">{{ __('County/State') }}</label>

                        <div class="col-md-8">
                            <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="county" autofocus>

                            @error('county')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 row mb-3">
                        <label for="town" class="col-md-4 col-form-label text-md-end">{{ __('Town') }}</label>

                        <div class="col-md-8">
                            <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ old('town') }}" required autocomplete="town" autofocus>

                            @error('town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-md-2">Cover Letter</label>
                    <div class="col-md-8">
                        <textarea name="cover_letter" cols="30" rows="10" id="editor"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="cv" class="col-md-4 col-form-label text-md-end">{{ __('Curriculum Vitae(CV)') }}</label>
                    <div class="col-md-8">
                        <input id="cv" type="file" class="form-control" name="cv"  required autocomplete="cv" autofocus accept=".pdf">

                        @error('cv')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/super-build/ckeditor.js"></script>
<script>
    CKEDITOR.ClassicEditor
        .create(document.getElementById("editor"), {
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
</script>
@endsection