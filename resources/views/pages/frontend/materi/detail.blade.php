@extends('layouts.frontend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
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
            <div class="card component-card_9 card-margin shadow-none">
            <img src="{{ asset('storage/' . $kelas->thumbnail) }}" class="card-img-top" alt="widget-card-2">
                <div class="card-body">
                    <p class="meta-date">25 Jan 2020</p>

                    <h5 class="card-title">How to Start a Blog in 5 Easy Steps.</h5>
                    <p class="card-text">Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit volutpat.</p>

                    <div class="meta-info">
                        <div class="meta-user">
                            <div class="avatar avatar-sm">
                                <span class="avatar-title rounded-circle">AG</span>
                            </div>
                            <div class="user-name">Luke Ivory</div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-7 card-margin ml-5">
            <h4>Modul Materi</h4>
            <div class="card">
                @foreach ($materi as $m)
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-1 text-center">{{ $loop->iteration }}</div>
                        <div class="col-8"><b>{{ $m->judul }}.</b></div>
                        <div class="col-3 text-center">
                            @auth
                            <a href="{{ route('materi.show', ["slug_kelas" => $slug_kelas, "materi_id" => $m->id]) }}" class="btn btn-success btn-sm">Pelajari</a>
                            @endauth
                            @guest
                            <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">Pelajari</a>
                            @endguest
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection