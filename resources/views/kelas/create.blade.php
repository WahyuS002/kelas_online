@extends('layouts.backend')

@section('style-before')
    <!-- Dropzone css -->
    <link href="{{ asset('annex/assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('annex/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Annex</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Form Validation</li>
                </ol>
            </div>
            <h4 class="page-title">Form Validation</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-30">
            <div class="card-body">

                <form class="" action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label> Mapel </label>
                            <select class="form-control" name="mapel_id" required>
                                <option value="">Pilih Mapel</option>
                                @foreach ($mapel as $m)
                                    <option value="{{ $m->id }}">{{ $m->mapel }}</option>
                                @endforeach
                            </select>
                        </div>                        
                        <div class="form-group col-md-4">
                            <label> Level </label>
                            <select class="form-control" name="level_kelas_id" required>
                                <option value="">Pilih Level</option>
                                @foreach ($level as $l)
                                    <option value="{{ $l->id }}">{{ $l->level }}</option>
                                @endforeach
                            </select>
                        </div>                        
                        <div class="form-group col-md-4">
                            <label> Tingkatan </label>
                            <select class="form-control" name="tingkatan_kelas_id" required>
                                <option value="">Pilih Tingkatan</option>
                                @foreach ($tingkatan as $t)
                                    <option value="{{ $t->id }}">{{ $t->tingkatan }}</option>
                                @endforeach
                            </select>
                        </div>                        
                    </div>

                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label> Nama Kelas </label>
                            <input class="form-control" type="text" name="nama_kelas" placeholder="Belajar HTML Dasar">
                        </div>
                        <div class="form-group col-md-6">
                            <label> Harga Kelas </label>
                            <input type="number" class="form-control" name="harga" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <label> Thumbnail </label>                                    
                                    <input type="file" id="input-file-now" class="dropify" name="gambar" />                                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="summernote"> Deskripsi </label>
                        <textarea id="summernote" name="deskripsi"></textarea>
                    </div>
                      
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
@endsection

@section('script-after')
    <!-- Dropzone js -->
    <script src="{{ asset('annex/assets/plugins/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('annex/assets/plugins/dropify/js/dropify.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

    <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>
@endsection