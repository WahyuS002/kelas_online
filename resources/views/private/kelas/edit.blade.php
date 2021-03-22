@extends('layouts.backend')

@push('style-after')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- SUMMERNOTE -->
<link href="{{ asset('cork/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
<!-- END SUMMERNOTE -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-top-spacing">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget-content-area br-4">
                <div class="widget-one">
                    <form action="{{ route('user.kelas.update', $kelas->slug_kelas) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <livewire:kelas.jenjang-level-edit :kelas="$kelas">

                        <div class="form-row mb-4">
                            <div class="form-group col-md-4">
                                <label for="harga">Harga <span class="required">*</span></label>
                                <input name="harga" type="number" class="form-control" value="{{ $kelas->harga }}">
                                @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="durasi_kelas">Durasi <span class="required">*</span></label>
                                <input type="date" name="durasi_kelas" class="form-control">
                                @error('durasi_kelas')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kapasitas_kelas">Kapasitas <span class="required">*</span></label>
                                <input type="number" name="kapasitas_kelas" class="form-control" value="{{ $kelas->kapasitas_kelas }}">
                                @error('kapasitas_kelas')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label for="kategori_id">Kategori <span class="required">*</span></label>
                                <select name="kategori_id" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                    @if ($k->kategori == 'Semua')
                                        @continue
                                    @endif
                                    <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="video_preview">URL Video Preview <span class="required">*</span></label>
                                <input type="text" name="video_preview" class="form-control" placeholder="https://www.youtube.com/watch?v=JbEtJAETwJU" value="https://www.youtube.com/watch?v={{ $kelas->video_preview }}">
                                @error('video_preview')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="form-group col-md-12">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label> Thumbnail <span class="required">*</span> <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file" >
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*" name="thumbnail">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        @error('thumbnail')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>

                        <textarea id="summernote" name="deskripsi">{{ $kelas->deskripsi }}</textarea>

                        <button type="submit" class="btn btn-primary mt-3">Buat Kelas</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('script-after')
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