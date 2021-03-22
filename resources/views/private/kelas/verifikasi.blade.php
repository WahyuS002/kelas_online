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
            <h4 class="page-title">Verifikasi Kelas</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="row">    
    <div class="col-md-6 col-lg-6 col-xl-3">
        <!-- Simple card -->
        <div class="card m-b-30">
            <select name="is_verified">
                <option value="waiting">Waiting</option>
                <option value="success">Success</option>
                <option value="failed">Vailed</option>
            </select>
    </div><!-- end col -->    
</div>
@endsection