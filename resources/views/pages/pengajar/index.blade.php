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
                            <h4>History Pengajar</h4>
                            <h6 class="text-muted ml-3">Tersedia {{ count($kelas) }} kelas yang telah di publish</h6>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="row">
                        @foreach ($kelas as $k)
                        <div class="col-lg-4">
                            <div class="card" style="width: 18rem;">
                                <a href="{{ route('user.kelas.pengajar.kelas', $k->slug_kelas) }}">
                                    <div class="circle-badge-danger">
                                        <span>5</span>
                                    </div>
                                    <img class="card-img-top" src="{{ asset('storage/' . $k->thumbnail) }}" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                  <h5 class="card-title">{{ $k->nama_kelas }}</h5>
                                  {{-- <p class="card-text text-muted">{{ $d->pivot->pembuat_kelas }}</p> --}}
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