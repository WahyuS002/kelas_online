@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row mx-5">
        <div class="col-12">
            <h1>{{ $materi->judul }}</h1>
        </div>
        <div class="col-12">
            <div class="card p-5">
                {{ $materi->deskripsi }}
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="row mx-5">
        <div class="col-3 text-left">
            <button class="btn btn-secondary btn-lg">< Prev</button>
        </div>
        <div class="col-6 text-center">
            <button class="btn btn-success btn-lg">Saya mengerti</button>
        </div>
        <div class="col-3 text-right">
            <button class="btn btn-secondary btn-lg">Next ></button>
        </div>
    </div>
</div>

@endsection