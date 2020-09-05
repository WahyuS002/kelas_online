@extends('layouts.frontend')

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
    <br><br><br>
    <div class="row mx-5">
        <div class="col-3 text-left">
            <button class="btn btn-secondary btn-lg">< Prev</button>
        </div>
        <livewire:materi.mengerti :materi="$materi">
        <div class="col-3 text-right">
            <button class="btn btn-secondary btn-lg">Next ></button>
        </div>
    </div>
    <br><br><br>
</div>

@endsection