@extends('layouts.frontend')

@section('style.below')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('content')
<div class="_215cd2">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="mt-35 mb-35">
                    <h1 class="main-text text-green-dark">Kelas Online</h1>
                    <h3 class="text-violet-dark">Cari kelas yang cocok untukmu sekarang</h3>
                    <div class="input-group">
                        <input type="text" class="form-control main-search-input" placeholder="Cari Kelas">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="button">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="mt-3">
                        <span>Populer : </span>
                        <span class="badge badge-light-danger px-3 py-2">Programming</span>
                        <span class="badge badge-light-danger px-3 py-2">Desain</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <lottie-player
                class="float-right"
                autoplay
                loop
                mode="normal"
                src="{{ asset('asset/lottie/main.json') }}"
                style="width: 85%;">
            </lottie-player>
        </div>
    </div>
</div>
</div>
<div class="_215td5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title589 text-center">
                    <h2>Our Features</h2>
                    <p>On Cursus, you have access to:</p>
                    <img class="line-title" src="{{ asset('cursus/images/line.svg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-3  col-sm-6">
                <div class="feature125">
                    <i class="uil uil-mobile-android-alt"></i>
                    <h4>Mobile learning</h4>
                    <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="col-lg-3  col-sm-6">
                <div class="feature125">
                    <i class="uil uil-users-alt"></i>
                    <h4>Academic & Technical Support</h4>
                    <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="col-lg-3  col-sm-6">
                <div class="feature125">
                    <i class="uil uil-award"></i>
                    <h4>Sharable Certificates</h4>
                    <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
            <div class="col-lg-3  col-sm-6">
                <div class="feature125">
                    <i class="uil uil-globe"></i>
                    <h4>An Inclusive Experience</h4>
                    <p>Quisque nec volutpat sem. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="_215zd5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title478">
                    <h2>Our Story</h2>
                    <img class="line-title" src="{{ asset('cursus/images/line.svg') }}" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur vel dolor id ultrices. Proin a magna at mi pretium pulvinar in eu enim. Nulla vel lacus lectus. Donec at venenatis augue. Nam vitae purus placerat, hendrerit nisl id, finibus magna. Etiam pharetra gravida ornare. Donec sagittis, ipsum in egestas egestas, dui lorem sollicitudin justo, ut ullamcorper velit neque eu velit. Ut et fringilla elit. Mauris augue augue, auctor a blandit ac, convallis eget neque. Curabitur in ante ante. Nullam laoreet tempus erat at ornare. In nisl nisi, dapibus eget facilisis sit amet, commodo quis nibh.</p >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="story125">
                        <img src="{{ asset('cursus/images/about/stroy_img.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="_215td5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title589 text-center">
                        <h2>Our Global Reach</h2>
                        <p>Cursus is the leading global marketplace for teaching and learning, connecting millions of students to the skills they need to succeed.</p >
                            <img class="line-title" src="{{ asset('cursus/images/line.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            25k
                            <span>Instructors</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            95k
                            <span>Courses</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            40M
                            <span>Course enrollments</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            50+
                            <span>Languages</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            595+
                            <span>Membership Partners</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="p__metric">
                            295
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_215xd5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title589 text-center">
                            <h2>Meet Our Team</h2>
                            <p>A perfect blend of creativity and technical wizardry. The best people formula for great websites!</p>
                            <img class="line-title" src="{{ asset('cursus/images/line.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jmio125">
                            <p>Morbi eget elit eget turpis varius mollis eget vel massa. Donec porttitor, sapien eget commodo vulputate, erat felis aliquam dolor, non condimentum libero dolor vel ipsum. Sed porttitor nisi eget nulla ullamcorper eleifend. Fusce tristique sapien nisi, vel feugiat neque luctus sit amet. Quisque consequat quis turpis in mattis. Maecenas eget mollis nisl. Cras porta dapibus est, quis malesuada ex iaculis at. Vestibulum egestas tortor in urna tempor, in fermentum lectus bibendum. In leo leo, bibendum at pharetra at, tincidunt in nulla. In vel malesuada nulla, sed tincidunt neque. Phasellus at massa vel sem aliquet sodales non in magna. Ut tempus ipsum sagittis neque cursus euismod. Vivamus luctus elementum tortor, ac aliquet dolor vehicula et.</p>
                            <a href="#" class="crer_btn_link">Lihat Semua Kelas</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="jmio125">
                            <img src="{{ asset('cursus/images/about/team.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('script-below')
        <script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js"></script>
        @endsection