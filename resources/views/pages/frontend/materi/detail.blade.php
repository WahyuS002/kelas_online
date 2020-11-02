@extends('layouts.frontend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/timeline/custom-timeline.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('jumbotron')
<div class="row mb-3">
    <div class="col-lg-12">
        <div class="jumbotron-fluid jumbotron-color">
            <div class="mx-5">
                <div class="col-8">
                    <h2 class="display-4 mt-4">Fluid Jumbotron</h2>
                    <p class="lead mt-3 mb-4">
                        This is a modified jumbotron that occupies the entire horizontal space of its parent.
                    </p>
                </div>
            </div>
            <br/>
        </div>
    </div>
</div>
@endsection

@section('content')
{{-- <div class="container"> --}}
    <div class="row">
        <div class="offset-md-8">
            <div class="card component-card_9 card-margin shadow-none kelas-detail">
                <img src="{{ asset('storage/' . $kelas->thumbnail) }}" class="card-img-top" alt="widget-card-2">
                <div class="card-body">

                    <h3 class="text-bold">Rp. {{ number_format($kelas->harga) }}</h3>
                    <p class="card-text">Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit volutpat.</p>
                    <hr>
                    <div class="row">
                        <p class="col text-muted text-center"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> {{ $kelas->countModul($kelas->id) }} Modul</p>
                        <p class="col text-muted text-center"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> {{ $duration_kelas }}</p>
                    </div>

                    <div class="meta-info">
                        <div class="meta-user">
                            <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle">AG</span>
                            </div>
                            <div class="user-name">Luke Ivory</div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3 fluid">
                        @if ($kelas->pesertaKelas($kelas->slug_kelas) == null)
                        <a href="{{ route('user.kelas.checkout', $kelas->slug_kelas) }}" type="submit" class="btn btn-outline-primary btn-block p-2">Beli Sekarang</a>
                        @else
                        <button class="btn btn-success btn-block p-2">Kelas Sudah Dibeli</button>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        <livewire:materi.modul :materi="$materi" :slug="$slug_kelas">
    </div>
    {{-- </div> --}}
    @endsection