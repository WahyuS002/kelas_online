@extends('layouts.backend')

@push('style-after')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}">
<!-- END PAGE LEVEL STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
@endpush

@section('content')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            <h4 class="mt-2"><strong>2</strong></h4>
                            <h6 class="text-muted">Murid</h6>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center vl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <h4 class="mt-2"><strong>2</strong></h4>
                            <h6 class="text-muted">Testimoni</h6>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-4 text-center vl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            <h4 class="mt-2"><strong>4.5/5</strong></h4>
                            <h6 class="text-muted">Rating</h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="table-responsive mb-4 mt-4">
                        <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peserta as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->pivot->status }}</td>
                                    {{-- <td>
                                        <a data-toggle="modal" data-target="#exampleModal" href="" class="badge badge-primary">Verifikasi</a>
                                    </td> --}}
                                    <livewire:kelas.verify-user :peserta="$p" :key="$p->id">
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

@endsection