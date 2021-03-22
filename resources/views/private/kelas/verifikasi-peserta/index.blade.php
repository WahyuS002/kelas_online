@extends('layouts.backend')

@push('script-after')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="row mb-3">
                        @foreach ($kelas as $k)
                        <div class="col-md-4">
                            <div class="card component-card_1">
                                <div class="card-body">
                                    <span class="circle">25</span>
                                    <a href="{{ route('admin.verifikasi.peserta.detail', $k->slug_kelas) }}">
                                        <div class="icon-svg">
                                            {{-- <svg> --}}
                                            <img src="{{ asset('storage/' . $k->thumbnail) }}" class="img-fluid" alt="">
                                            {{-- </svg> --}}
                                        </div>
                                    </a>
                                    <h5 class="card-title">{{ $k->nama_kelas }}</h5>
                                    <p class="card-text">{{ $k->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection