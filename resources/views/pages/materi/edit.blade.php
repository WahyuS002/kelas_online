@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('cork/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- SUMMERNOTE -->
    <link href="{{ asset('cork/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
    <!-- END SUMMERNOTE -->
@endpush

@section('content')
<div class="layout-px-spacing">
    <!-- CONTENT AREA -->

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <form action="{{ route('kelas.materi.update', $materi->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="judul">Judul Materi</label>
                                <input name="judul" type="text" class="form-control" value="{{ $materi->judul }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="urutan">Urutan</label>
                                <input name="urutan" type="text" class="form-control" value="{{ $materi->urutan }}">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="summernote" name="deskripsi">{{ $materi->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!-- CONTENT AREA -->
</div>
@endsection

@push('script-after')
<!--  BEGIN CUSTOM SCRIPTS FILE  -->

<script src="{{ asset('cork/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('cork/plugins/blockui/jquery.blockUI.min.js') }}"></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="{{ asset('cork/assets/js/users/account-settings.js') }}"></script>
<!--  END CUSTOM SCRIPTS FILE  -->

<script src="{{ asset('cork/plugins/summernote/summernote.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
        });
    });
</script>
@endpush