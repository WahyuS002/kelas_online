@extends('layouts.backend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->    
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <!-- CONTENT AREA -->        
        <div class="row layout-top-spacing">
            
            @forelse ($kelas as $k)
            <div class="col-xl-4 col-lg-4 col-md-4 col-12 layout-spacing">
                <div class="widget-content-area br-4">
                    <div class="widget-one">                            

                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg> ... </svg>
                                </div>
                                <h5 class="card-title">Simple</h5>
                                <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                                <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                                <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="alert alert-warning mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Warning!</strong> Tidak ada kelas </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ route('kelas.create') }}" type="submit" class="btn btn-primary mt-3">Tambah Kelas</a>
                    </div>
                </div>
            @endforelse
            

        </div>

        <!-- CONTENT AREA -->
                        
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->
@endsection