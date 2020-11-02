@extends('layouts.backend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link href="{{ asset('cork/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush

@section('content')
<div class="layout-px-spacing">
    <!-- CONTENT AREA -->

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                            <h4>Materi yang dibuat</h4>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                            <a href="{{ route('user.kelas.materi.create', $kelas->slug_kelas) }}" class="btn btn-primary btn-sm mr-3">Tambah Materi</a>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <div class="table-responsive mb-4">
                        <table id="column-filter" class="table">
                            <thead>
                                <tr>
                                    <th class="checkbox-column"> No. </th>
                                    <th>Materi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($materi as $m)
                                <tr>
                                    <td class="checkbox-column">{{ $loop->iteration }}</td>
                                    <td>{{ $m->judul }}</td>
                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href="{{ route('user.kelas.materi.edit', ["kelas" => $kelas->slug_kelas, "materi" => $m->slug_materi]) }}" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit text-success"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                            </a></li>
                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </a> </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3">
                                        <div class="text-danger">
                                            <p>Materi belum ada</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT AREA -->
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