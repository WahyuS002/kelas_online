@extends('layouts.frontend')

@push('style-after')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('cork-frontend/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-frontend/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('jumbotron')
    <div class="row">
        <div class="col-lg-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="mx-5">
                <h2 class="display-4 mb-5 mt-4">Kelas Online</h2>
                <div class="col-4">
                    <p class="lead mt-3 mb-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa voluptatem nisi cupiditate quo temporibus.
                    </p>
                </div>
            </div>
            <br/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <blockquote class="info-panel media-object col-xl-10">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('icon/frontend/online-support.png') }}" class="float-left">
                        <h4>24 Hours</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur.</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('icon/frontend/image-correction.png') }}" class="float-left">
                        <h4>High Res</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur.</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('icon/frontend/protected.png') }}" class="float-left">
                        <h4>Security</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur.</p>
                    </div>
                </div>
            </blockquote>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center mb-3 mt-5">
                <h3>Kelas Pilihan</h3>
            </div>
            <div class="row mb-5">
                @foreach ($kelas as $k)
                <div class="col-xl-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <a href="{{ route('materi.detail', $k->slug_kelas) }}">
                                <div class="icon-svg">
                                    {{-- <svg> --}}
                                    <img src="{{ asset('storage/'.$k->thumbnail) }}" class="img-fluid" alt="">
                                    {{-- </svg> --}}
                                </div>
                            </a>
                            <h5 class="card-title">{{ Str::limit($k->nama_kelas, 16) }}</h5>
                            <p class="card-text">{!! Str::limit($k->user->name, 25) !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mb-3">
                <h3>Semua Kelas</h3>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <div class="icon-svg">
                                <svg> ... </svg>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <div class="icon-svg">
                                <svg> ... </svg>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <div class="icon-svg">
                                <svg> ... </svg>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <div class="icon-svg">
                                <svg> ... </svg>
                            </div>
                            <h5 class="card-title">Lorem ipsum dolor sit amet.</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-after')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('cork-frontend/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('cork-frontend/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endpush