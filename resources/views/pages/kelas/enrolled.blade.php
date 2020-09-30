@extends('layouts.backend')

@push('style-after')
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/custom_dt_miscellaneous.css') }}">
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link href="{{ asset('cork/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush

@section('content')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <h4>History Kelas yang Diikuti</h4>
                            <h6 class="text-muted ml-3">10 Kelas tersedia untuk dipelajari</h6>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    {{-- <div class="table-responsive mb-4">
                        <table id="column-filter" class="table">
                            <thead>
                                <tr>
                                    <th class="checkbox-column"> No. </th>
                                    <th>Nama Kelas</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td class="checkbox-column"> {{ $loop->iteration }} </td>
                                        <td> {{ $d->nama_kelas }} </td>
                                        <td> {{ $d->harga_bayar }} </td>
                                        <td> {{ $d->status }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}

                    <div class="row">
                        @foreach ($data as $d)
                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <span class="badge badge-warning w-25 notify-badge shadow">{{ $d->pivot->status }}</span>
                                <img class="card-img-top" src="{{ asset('storage/' . $d->thumbnail) }}" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $d->nama_kelas }}</h5>
                                  <p class="card-text text-muted">{{ $d->pivot->pembuat_kelas }}</p>
                                </div>
                              </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script-after')
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
@endpush