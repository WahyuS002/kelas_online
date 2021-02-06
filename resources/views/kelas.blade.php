@extends('layouts.frontend-2')

@section('style-before')
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css" />
@endsection

@section('outside-main')
<!-- START JUMBOTRON -->
<div class="jumbotron jumbotron-fluid" style="height: 120vh;">
    <div class="container px-5">
        <h3 class="text-white font-montserrat mt-4">#01 Pengenalan Dasar</h3>
        <div class="d-flex align-items-center mt-4">
            <div class="card-full d-flex justify-content-center align-items-center" style="width: 100%;height: 100%;">
                <div class="plyr__video-embed" id="player" style="width: 100%; border-radius: 40px;">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen allowtransparency allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END JUMBOTRON -->
@endsection

@section('inside-main')
<div class="container mt-2">
    <div class="d-flex justify-content-center align-items-center">
        <span style="cursor: pointer;">
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle r="13.5" transform="matrix(-1 0 0 1 13.5 13.5)" fill="#FF6575"/>
                <path d="M8 13.5L16.25 18.2631L16.25 8.73686L8 13.5Z" fill="white"/>
            </svg>
        </span>
        <button class="font-montserrat px-4 py-2 btn text-white bg-pink mx-3">Saya Mengerti</button>
        <span style="cursor: pointer;">
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="13.5" cy="13.5" r="13.5" fill="#FF6575"/>
                <path d="M19 13.5L10.75 18.2631L10.75 8.73686L19 13.5Z" fill="white"/>
            </svg>
        </span>
    </div>

    <hr class="mt-3">

    <div class="mt-5">
        <h4 class="font-montserrat font-weight-bold">Komentar</h4>
        <div class="d-flex flex-wrap align-items-center mt-4 w-half">
            <div class="comment comment-avatar d-flex align-items-center">
                <img src="{{ asset('asset/icon/comment-avatar.png') }}" alt="">
                <input class="ml-4" type="text" placeholder="Tulis Komentar...">
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center w-half">
            <div class="d-flex justify-content-end align-items-center">
                <span class="mr-3 text-pink">Batal</span>
                <button class="text-white btn bg-pink">
                    Komentar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-after')
<script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>
<script>
    const player = new Plyr("#player");
</script>
@endsection