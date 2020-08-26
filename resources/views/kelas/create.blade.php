@extends('layouts.backend')

@push('style-after')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/plugins/select2/select2.min.css') }}">
    <!--  END CUSTOM STYLE FILE  -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    
    <!-- SUMMERNOTE -->
    <link href="{{ asset('cork/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
    <!-- END SUMMERNOTE -->
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
                            
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                <div class="widget-content-area br-4">
                    <div class="widget-one">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="nama_kelas">Nama Kelas</label>
                                    <input name="nama_kelas" type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jenjang">Jenjang</label>
                                    <select name="jenjang" class="form-control">
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="level">Level</label>
                                    <select name="jenjang" class="form-control">
                                        <option value="kelas1">Kelas 1</option>
                                        <option value="kelas2">Kelas 2</option>
                                        <option value="kelas3">Kelas 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="form-group col-md-4">
                                    <label for="harga">Harga</label>
                                    <input name="harga" type="number" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="jenjang">Jenjang</label>
                                    <input type="date" name="durasi" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="kapasitas">Kapasitas</label>
                                    <input type="number" name="kapasitas" class="form-control">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control tagging" multiple="multiple">
                                        <option>orange</option>
                                        <option>white</option>
                                        <option>purple</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="video_preview">URL Video Preview</label>
                                    <input type="text" name="video_preview" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-row mb-4">
                                <div class="form-group col-md-12">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label> Thumbnail <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="foto">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                            </div>

                            <textarea id="summernote" name="editordata"></textarea>

                          <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('script-after')

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('cork/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('cork/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('cork/plugins/select2/custom-select2.js') }}"></script>

    <script>
    $(".tagging").select2({
        tags: true
    });
    </script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('cork/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS --> 

    <script src="{{ asset('cork/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>
@endpush