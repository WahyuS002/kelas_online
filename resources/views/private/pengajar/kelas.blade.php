@extends('layouts.backend')

@push('style-after')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}">
<!-- END PAGE LEVEL STYLES -->
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div class="layout-px-spacing">


    <!-- CONTENT AREA -->


    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="d-flex justify-content-between">
                        <h5>Kelas - {{ $kelas->nama_kelas }} </h5>
                        <button class="btn btn-sm btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive mr-1"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                            Withdraw
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-3 text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#2196f3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="15" x2="16" y2="15"></line><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                            <h4 class="mt-2"><strong>
                                @if ($peserta->isEmpty())
                                    0
                                @endif
                                @foreach ($peserta as $p)
                                    @if ($p->pivot->status == 'ya')
                                        {{ count($peserta) }}
                                        @break
                                    @endif
                                @endforeach
                            </strong></h4>
                            <h6 class="text-muted">
                                Total Peserta
                            </h6>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-3 text-center vl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#8dbf42" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                            <h4 class="mt-2"><strong>1</strong></h4>
                            <h6 class="text-muted">Peserta Selesai</h6>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-3 text-center vl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#e2a03f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-frown"><circle cx="12" cy="12" r="10"></circle><path d="M16 16s-1.5-2-4-2-4 2-4 2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                            <h4 class="mt-2"><strong>5</strong></h4>
                            <h6 class="text-muted">Peserta Belum Selesai</h6>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-3 text-center vl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#1b55e2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            <h4 class="mt-2"><strong>Rp.{{ number_format($peserta->sum('pivot.harga_bayar')) }}</strong></h4>
                            <h6 class="text-muted">Total Penghasilan</h6>
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
                                    <th>Nama Peserta</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Harga Bayar</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($peserta as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->name }}</td>
                                        <td>{{ $p->pivot->waktu_mulai }}</td>
                                        <td>{{ $p->pivot->waktu_selesai ? $p->pivot->waktu_selesai : 'Belum Selesai'}}</td>
                                        <td>{{ $p->pivot->harga_bayar }}</td>
                                        <td>{{ $p->pivot->waktu_selesai ? 'Selesai' : 'Belum Selesai' }}</td>
                                        <td class="text-center">
                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
                                {{-- @foreach ($kelas as $k)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Str::limit($k->nama_kelas, 11) }}</td>
                                    <td>{{ Str::limit($k->kategoriKelas->kategori, 11) }}</td>
                                    <td>{{ $k->materi->count() }}</td>
                                    <td>30</td>
                                    <td>
                                        @if ($k->status == 'review')
                                            <span class="badge badge-secondary"> Review </span>
                                        @elseif ($k->status == 'draf')
                                            <span class="badge badge-warning"> Draf </span>
                                        @elseif ($k->status == 'publish')
                                            <span class="badge badge-success"> Published </span>
                                        @elseif ($k->status == 'reject')
                                            <span class="badge badge-danger"> Ditolak </span>
                                        @endif
                                    </td>
                                    <td>Rp. {{ number_format($k->harga) }} </td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a class="dropdown-item" href="{{ route('admin.kelas.view', $k->slug_kelas) }}">View</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- CONTENT AREA -->

</div>
<!--  END CONTENT AREA  -->
@endsection

@push('script-after')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('cork/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('table.multi-table').DataTable({
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7,
                drawCallback: function () {
                    $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                    $('.dataTables_wrapper table').removeClass('table-striped');
                }
            });
        } );
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endpush