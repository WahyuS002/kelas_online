@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row mx-5">
        <div class="col-12">
            <h1>Sejarah Singkat HTML</h1>
        </div>
        <div class="col-6">
            <div class="card">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, suscipit.
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