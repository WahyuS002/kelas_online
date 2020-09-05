@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/dropify/dropify.min.css') }}">
    <link href="{{ asset('cork/assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- SUMMERNOTE -->
    <link href="{{ asset('cork/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
    <!-- END SUMMERNOTE -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<div class="layout-px-spacing">
    <!-- CONTENT AREA -->

    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">

                    <form action="{{ route('user.kelas.materi.store', $id) }}" method="post">
                        @csrf
                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <label for="judul">Judul Materi <span class="required">*</span></label>
                                <input name="judul" type="text" class="form-control">
                                @error('judul')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="deskripsi">Deskripsi <span class="required">*</span></label>
                                <textarea id="summernote" name="deskripsi"></textarea>
                                @error('deskripsi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="video">Video <span class="required">*</span></label>
                                <input name="video" type="text" class="form-control">
                                @error('video')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="foto">Upload File</label>
                                <div class="upload pr-md-4">
                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="foto" data-allowed-file-extensions="png jpg jpeg" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Picture</p>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="pdf">Upload Pdf</label>
                                <div class="upload pr-md-4">
                                    <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" name="pdf" data-allowed-file-extensions="pdf" />
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Pdf</p>
                                </div>
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