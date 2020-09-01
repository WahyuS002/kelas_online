@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
<div class="layout-px-spacing">
    <!-- CONTENT AREA -->    

    <div class="row layout-top-spacing">
        
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4">
                                <div class="d-flex align-items-center justify-content-between">                      
                                    <h6>Materi Kelas - {{ $kelas->nama_kelas }}</h6>                                    
                                        <livewire:materi.modal :key="$kelas->id" :kelas="$kelas">                                    
                                </div>   
                                <table id="zero-config" class="table table-hover mt-3" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Materi</th>                              
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($materi as $m)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $m->judul }}</td>
                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    

                </div>            
            </div>
        </div>

    </div>
    <!-- CONTENT AREA -->
</div>
@endsection