@extends('layouts.frontend')

@push('style-after')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('cork/assets/css/forms/theme-checkbox-radio.css') }}">
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-media_object.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<link rel="stylesheet" href="{{ asset('cork/plugins/editors/markdown/simplemde.min.css') }}">
@endpush

@section('content')

<div class="container">
    <div class="row mx-5">
        <div class="col-12">
            <h1>{{ $materi->judul }}</h1>
        </div>
        <div class="col-12">
            <div class="card p-5">
                <div class="d-flex justify-content-center mb-5">
                    <iframe width="870" height="441" src="http://www.youtube.com/embed/{{ $materi->video }}" frameborder="0" allowfullscreen></iframe>
                </div>
                {!! $materi->deskripsi !!}
            </div>
        </div>
    </div>

    <!-- Notation Text with Icon -->
    <div class="row mx-5 mt-4">
        <div class="col-12">
            <div class="widget-content widget-content-area notation-text-icon">
                <div class="media">
                    <img class=" rounded" src="{{ asset('cork/assets/img/90x90.jpg') }}" alt="pic1">
                    <div class="media-body">

                        <div class="card">
                            <div class="card-header">
                                Wahyu
                            </div>
                            <div class="card-body">
                                <textarea name="comment" id="comment" cols="30" rows="5" style="height: 100px !important;"></textarea>
                            </div>
                            <div class="card-footer text-muted">
                                2 days ago
                            </div>
                        </div>

                        <h4 class="media-heading">Heading</h4>
                        <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                        <div class="media-notation">
                            <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Reply </a>
                            <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit </a>
                            <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>
                        </div>

                        <div class="media">
                            <img class=" rounded" src="{{ asset('cork/assets/img/90x90.jpg') }}" alt="pic1">
                            <div class="media-body">
                                <h4 class="media-heading">Heading</h4>
                                <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                                <div class="media-notation">
                                    <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit </a>
                                    <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mx-5 mt-5">
        <div class="col-3 text-left">
            <a class="btn btn-secondary btn-lg">< Prev</a>
        </div>
        <livewire:materi.mengerti :materi="$materi">
        <div class="col-3 text-right">
            <a class="btn btn-secondary btn-lg">Next ></a>
        </div>
    </div>
    <br><br><br>
</div>

@endsection

@push('script-after')


<script src="{{ asset('cork/plugins/editors/markdown/simplemde.min.js') }}"></script>

<script>
    // Basic
    new SimpleMDE({
        element: document.getElementById("comment"),
        spellChecker: false,
        hideIcons: ["guide", "heading", "unordered-list", "ordered-list", "fullscreen", "side-by-side", "preview"],
    });
</script>

@endpush