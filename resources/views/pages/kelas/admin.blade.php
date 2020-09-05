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
            <h4 class="page-title">Semua Kelas</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->

<div class="row">
    @foreach ($kelas as $k)
    <div class="col-md-6 col-lg-6 col-xl-3">
        <!-- Simple card -->
        <div class="card m-b-30">
            <img class="card-img-top img-fluid" src="{{ asset("storage/" . $k->gambar) }}" alt="{{ asset('annex/assets/images/small/img-1.jpg') }}">
            <div class="card-body">
                <h4 class="card-title font-20 mt-0">{{ $k->nama_kelas }}</h4>
                <p class="card-text">{!! Str::limit($k->deskripsi, 50) !!}</p>
                @if ($k->is_verified == 'waiting')
                    <a href="{{ route('user.kelas.verifikasi', $k->id) }}" class="btn btn-sm btn-warning waves-effect waves-light">{{ $k->is_verified }}</a>
                @elseif($k->is_verified == 'success')
                <a href="#" class="btn btn-sm btn-success waves-effect waves-light">{{ $k->is_verified }}</a>
                @endif
            </div>
        </div>
    </div><!-- end col -->
    @endforeach
</div>
@endsection