@extends('layouts.frontend-2')

@section('style-before')
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css" />
@endsection

@section('outside-main')
<!-- START JUMBOTRON -->
<div class="jumbotron jumbotron-fluid mb-6 d-flex align-items-center">
    <div class="container mt-4">
        <div>
            <h1 class="text-white font-montserrat course-title text-center">Mendirikan Startup dan Cara Membagi Profit</h1>
            <div class="d-flex justify-content-center mt-4">
                <div>
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.3859 6.33831L12.6901 5.51709L10.1439 0.396152C10.0743 0.255944 9.95993 0.142442 9.8186 0.0734507C9.46415 -0.100141 9.03343 0.0445188 8.85621 0.396152L6.31002 5.51709L0.614191 6.33831C0.457157 6.36057 0.313583 6.43401 0.20366 6.54529C0.0707685 6.68079 -0.00246073 6.86309 6.31408e-05 7.05213C0.00258702 7.24117 0.0806575 7.42149 0.21712 7.55345L4.33813 11.5394L3.36452 17.1677C3.34169 17.2987 3.35629 17.4333 3.40668 17.5564C3.45706 17.6795 3.54121 17.7862 3.64958 17.8643C3.75795 17.9424 3.8862 17.9887 4.0198 17.9982C4.1534 18.0077 4.28699 17.9798 4.40543 17.9177L9.50004 15.2605L14.5947 17.9177C14.7337 17.9912 14.8953 18.0157 15.0501 17.989C15.4404 17.9222 15.7029 17.555 15.6356 17.1677L14.662 11.5394L18.783 7.55345C18.8951 7.4444 18.9692 7.30197 18.9916 7.14618C19.0522 6.75671 18.7785 6.39618 18.3859 6.33831Z" fill="#FCCB06"/>
                    </svg>
                    <span class="text-white ml-2">4.6</span>
                </div>
                <div>
                    <svg class="ml-4" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 4.5C4.5 6.981 6.519 9 9 9C11.481 9 13.5 6.981 13.5 4.5C13.5 2.019 11.481 0 9 0C6.519 0 4.5 2.019 4.5 4.5ZM17 19H18V18C18 14.141 14.859 11 11 11H7C3.14 11 0 14.141 0 18V19H17Z" fill="#A5A5A5"/>
                    </svg>
                    <span class="text-white ml-2">6816</span>
                </div>
                <div>
                    <svg class="ml-4" width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 3.465V19.635C0 22.1772 2.093 23.1 3.5 23.1H21V20.79H3.514C2.975 20.7761 2.33333 20.5659 2.33333 19.635C2.33333 18.7041 2.975 18.4939 3.514 18.48H21V2.31C21 1.03603 19.9535 0 18.6667 0H3.5C2.093 0 0 0.922845 0 3.465Z" fill="white"/>
                    </svg>
                    <span class="text-white ml-2">12 Modul</span>
                </div>
                <div>
                    <svg class="ml-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C5.3832 0 0 5.3832 0 12C0 18.6168 5.3832 24 12 24C18.6168 24 24 18.6168 24 12C24 5.3832 18.6168 0 12 0ZM18.9 13.2H10.8V4.8H13.2V10.8H18.9V13.2Z" fill="white"/>
                    </svg>
                    <span class="text-white ml-2">30:12</span>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <span class="text-secondary-purple font-montserrat font-semibold">Dibuat oleh &nbsp;</span><span class="text-green font-montserrat font-semibold">Wahyu Syahputra</span>
            </div>
        </div>
    </div>
</div>
<!-- END JUMBOTRON -->
@endsection

@section('inside-main')
<div class="container" style="margin-top: -220px;">
    <div class="row">
        <div class="col-md-7">
            <div class="card-full d-flex justify-content-center align-items-center">
                <button class="btn btn-preview font-montserrat bg-pink">Preview Kelas</button>
                <div class="plyr__video-embed" id="player" style="width: 98%; height: 98%; border-radius: 40px;">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen allowtransparency allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card-full p-5">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h4 class="font-montserrat font-bold text-gray text-md">Pelajaran</h4>
                        <span class="ml-1">
                            <svg width="10" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="svg-polygon">
                                <path d="M6.5 10L0.870835 0.249999L12.1292 0.25L6.5 10Z" fill="#FF6575"/>
                            </svg>
                        </span>
                    </div>
                    <h4 class="font-montserrat font-bold text-gray text-md">4/10</h4>
                </div>
                <div class="progress progress-md progress-rounded mt-2">
                    <div class="progress-bar-pink" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:70%">70%</div>
                </div>
                <div class="info-video mt-5">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('asset/icon/play-disable.png') }}" alt="">
                        <div class="align-middle ml-3 text-video">
                            <p class="no-margin font-montserrat font-medium">2 Min</p>
                            <p class="no-margin font-montserrat font-semibold">01 - Pengenalan Dasar</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('asset/icon/play-disable.png') }}" alt="">
                        <div class="align-middle ml-3 text-video">
                            <p class="no-margin font-montserrat font-medium">2 Min</p>
                            <p class="no-margin font-montserrat font-semibold">02 - Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="mt-6 font-bold font-montserrat">Tentang Kelas</h1>
    <p class="font-montserrat text-gray mt-4">
        3D Object Illustration telah menjadi trend untuk design user-interface di tahun 2019 dan seterusnya. Pada kelas ini kita akan menggunakan software gratis yaitu adalah Blender untuk mendesain beberapa Illustration yang akan kita gunakan pada Landing Page suatu website. Kita juga akan mempelajari UI/UX tentang bagaimana caranya mendesain sebuah landing page yang dapat membuat pengguna tertarik sehingga akan membeli atau menggunakan service yang kita sediakan.

        <br><br>

        Semua software yang digunakan pada kelas ini adalah gratis seperti Figma, Blender, InVision, dan juga lainnya. Teruntuk kalian yang ingin bergabung juga tidak wajib untuk memiliki pengalaman dasar karena di sini kita akan belajar dari dasar. Silakan ikuti kelasnya dan kami akan tunggu kalian di kelas

    </p>
</div>
@endsection

@section('script-after')
<script src="https://cdn.plyr.io/3.6.4/plyr.js"></script>
<script>
    const player = new Plyr("#player");
</script>
@endsection