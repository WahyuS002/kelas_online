@extends('layouts.frontend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
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
            <button id="yt-video-link" type="button" class="btn btn-primary mb-2 mr-2">Play Youtube</button>
            <!-- Modal -->
            <div class="modal fade" id="videoMedia1" tabindex="-1" role="dialog" aria-labelledby="videoMedia1Label" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" id="videoMedia1Label">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="video-container">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
            @foreach ($materi_kelas as $m)
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
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            @if($kelas->status == 'review')
            <button type="button" class="btn btn-secondary btn-rounded mt-3" data-toggle="modal" data-target="#exampleModal" disabled>
                Sedang di review
            </button>
            @elseif(!$kelas->status)
            <button type="button" class="btn btn-secondary btn-rounded mt-3" data-toggle="modal" data-target="#exampleModal">
                Ajukan
            </button>
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
<script>
    $('#yt-video-link').click(function () {
        var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
        $('#videoMedia1').modal('show');
        $('<iframe>').attr({
            'src': src,
            'width': '560',
            'height': '315',
            'allow': 'encrypted-media'
        }).css('border', '0').appendTo('#videoMedia1 .video-container');
    });
    $('#vimeo-video-link').click(function () {
        var src = 'https://player.vimeo.com/video/1084537';
        $('#videoMedia2').modal('show');
        $('<iframe>').attr({
            'src': src,
            'width': '1000',
            'height': '1315',
            'allow': 'encrypted-media'
        }).css('border', '0').appendTo('#videoMedia2 .video-container');
    });
    $('#videoMedia1 button, #videoMedia2 button').click(function () {
        $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
    });
</script>
<!--  END CUSTOM SCRIPT FILE  -->
@endpush