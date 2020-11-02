@extends('layouts.backend')

@push('style-after')
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/custom_dt_miscellaneous.css') }}">
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link href="{{ asset('cork/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/table/datatable/dt-global_style.css') }}">

<link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush

@section('content')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Peserta Kelas - {{ $kelas->nama_kelas }}</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <livewire:verifikasi.peserta :kelas="$kelas">

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script-after')

    <script>
        window.addEventListener('openVerifikasiModal', event => {
            $('#verifikasiModal').modal('show');
        })
    </script>

    <script>
        window.addEventListener('closeVerifikasiModal', event => {
            $('#verifikasiModal').modal('hide');
        })
    </script>

@endpush