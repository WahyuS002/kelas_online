@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
<div class="layout-px-spacing">
    <!-- CONTENT AREA -->    

    <div class="row layout-top-spacing">
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="row d-flex align-items-center justify-content-between">
                        <h6>Materi Kelas - {{ $kelas->nama_kelas }}</h6>
                        {{-- <a href="{{ route('kelas.materi.create', $kelas->id) }}" class="btn btn-primary">Tambah Materi</a> --}}
                        <livewire:materi.modal :key="$kelas->id" :kelas="$kelas">
                    </div>

                </div>            
            </div>
        </div>

    </div>
    <!-- CONTENT AREA -->
</div>
@endsection