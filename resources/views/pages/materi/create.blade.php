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

                    <form action="" method="post">
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="judul">Judul Materi</label>
                                <input name="judul" type="text" class="form-control">
                            </div>                            
                            <div class="form-group col-md-12">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="summernote" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="file">Upload File</label>
                                <div class="upload pr-md-4">
                                    <input type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('cork/assets/img/200x200.jpg') }}" data-max-file-size="2M" name="foto" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Picture</p>
                                </div>
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