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
                <h2 class="display-4 mb-5 mt-4">Fluid Jumbotron</h2>
                <div class="col-4">
                    <p class="lead mt-3 mb-4">
                        This is a modified jumbotron that occupies the entire horizontal space of its parent.
                    </p>
                </div>
            </div>
            <br/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <blockquote class="blockquote media-object col-10">
                <div class="row">
                    <div class="col">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet.
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </blockquote>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <h3>Kelas Pilihan</h3>
            </div>
            <div class="row mb-5">
                <div class="col-3">
                    <div class="card component-card_1">
                        <div class="card-body">
                            <a href="/kelas">
                                <div class="icon-svg">
                                    <svg> ... </svg>
                                </div>
                            </a>
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