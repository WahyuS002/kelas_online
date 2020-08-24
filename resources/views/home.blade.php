@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Annex</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Selamat Datang {{ auth()->user()->name }}</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
@endsection
