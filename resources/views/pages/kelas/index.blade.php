@extends('layouts.backend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->    
@endpush

@section('content')
<div class="layout-px-spacing">      

        @forelse ($kelas as $k)
        <div class="row">            
            <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">                
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row d-flex align-items-center">                            
                            <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                                <h4>Card 1</h4>                                
                            </div>                            
                            <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                                <a href="{{ route('kelas.create') }}" class="btn btn-primary float-right">Tambah Kelas</a>                              
                            </div>                            
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="card component-card_2">
                            <a href="">
                                <img src="{{ asset('storage/' . $k->thumbnail) }}" class="card-img-top" onError="this.onerror=null;this.src='{{ asset('cork/assets/img/400x300.jpg') }}';">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($k->user->name, 15) }}</h5>
                                <p class="card-text">{!! Str::limit($k->deskripsi, 50) !!}</p>                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-warning mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Warning!</strong> Tidak ada kelas silahkan lengkapi profile mu <a href="{{ route('profile') }}"><strong>disini</strong></a> </div>                
        @endforelse
        

</div>
@endsection