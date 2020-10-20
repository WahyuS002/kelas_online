@extends('layouts.frontend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('cork/assets/css/elements/alert.css') }}">
<link rel="stylesheet" href="{{ asset('cork/plugins/modal-video/modal-video.min.css') }}">
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
<div class="row">
    <div class="offset-md-8">
        <div class="card component-card_9 card-margin shadow-none">
            <iframe width="350" height="300" src="http://www.youtube.com/embed/{{ $kelas->video_preview }}" frameborder="0" allowfullscreen></iframe>

            <!-- Button trigger modal -->
            <button class="js-modal-btn text-center" data-video-id="{{ $kelas->video_preview }}" style="border: none; background: none;">
                <img src="http://img.youtube.com/vi/{{ $kelas->video_preview }}/mqdefault.jpg" width="340" height="300" style="object-fit: cover;">
            </button>

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
            @forelse ($materi_kelas as $m)
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <div class="col-1 text-center">{{ $loop->iteration }}</div>
                    <div class="col-8"><b>{{ $m->judul }}.</b></div>
                    <div class="col-3 text-center">
                        @auth
                        <a href="{{ route('user.kelas.materi.show', ["kelas" => $slug_kelas, "materi" => $m->id]) }}" class="btn btn-success btn-sm">Pelajari</a>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-sm">Pelajari</a>
                        @endguest
                    </div>
                </div>
            </div>

            @empty
            <div class="alert alert-outline-danger mt-3 text-danger text-center" role="alert">
                <strong>Materi belum dibuat!</strong> Silahkan buat materi <a href="{{ route('user.kelas.materi', $slug_kelas) }}"><strong class="text-danger">disini</strong></a>
            </div>

            @endforelse
        </div>
        <div class="d-flex justify-content-center">

            @if($kelas->status == 'review')
            <button type="button" class="btn btn-secondary btn-rounded mt-3" data-toggle="modal" data-target="#exampleModal" disabled>
                Sedang di review
            </button>
            @elseif (count($kelas->materi) > 0)
                @if($kelas->status == 'draf')
                <button type="button" class="btn btn-secondary btn-rounded mt-3" data-toggle="modal" data-target="#exampleModal">
                    Ajukan
                </button>
                @endif
            @endif

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <livewire:kelas.modal-setuju :id="$kelas->id" :kelas="$kelas">
    </div>
</div>
@endsection

@push('script-after')

    <script src="{{ asset('cork/plugins/modal-video/jquery-modal-video.min.js') }}"></script>
    <script>
        $(".js-modal-btn").modalVideo();
    </script>

@endpush