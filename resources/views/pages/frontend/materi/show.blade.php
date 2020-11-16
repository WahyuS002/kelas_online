@extends('layouts.frontend')

@push('style-after')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('cork/assets/css/forms/theme-checkbox-radio.css') }}">
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-media_object.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endpush

@section('content')

<div class="row mx-2">
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

<div class="row mx-2 mt-4">
    <div class="col-12">

        <div class="row mx-5">
            <div class="col-3 text-left">
                <a class="btn btn-secondary btn-lg">< Prev</a>
            </div>
            <livewire:materi.mengerti :materi="$materi">
            <div class="col-3 text-right">
                <a class="btn btn-secondary btn-lg">Next ></a>
            </div>
        </div>

        <livewire:materi.komentar :materi="$materi" :slug="$slug_kelas">

    </div>
</div>


<br><br><br>

@endsection

@push('script-after')
    <script src="{{ asset('vendor/alpine-js/alpine.min.js') }}"></script>
@endpush