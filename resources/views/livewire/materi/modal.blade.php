<div>

<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Materi</button>

<!-- Modal -->
<div class="modal animated fadeInUp custo-fadeInUp" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <label>Bahan Materi</label>
                <select class="form-control mb-3" name="type" wire:model="type">
                    <option value="">Pilih Bahan . . .</option>
                    <option value="1">Video (url)</option>
                    <option value="2">PDF</option>
                    <option value="3">Foto</option>
                </select>
                @if ($type == 1)
                <form action="#" method="POST" wire:submit.prevent="addMateriVideo">
                    <div class="form-group mb-3">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" wire:model="judul">
                        @error('judul')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Url Video</label>
                        <input type="text" class="form-control" name="video" wire:model="video">
                        @error('video')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea class="form-control" style="resize: none;" rows="5" name="deskripsi" wire:model="deskripsi"></textarea>
                        @error('deskripsi')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                @elseif($type == 2)
                <form action="#" method="POST" wire:submit.prevent="addMateriPdf" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" wire:model="judul">
                        @error('judul')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>PDF</label>
                        <input type="file" class="form-control" name="pdf" wire:model="pdf">
                        @error('pdf')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea class="form-control" style="resize: none;" rows="5" name="deskripsi" wire:model="deskripsi"></textarea>
                        @error('deskripsi')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                @elseif($type == 3)
                <form action="#" method="POST" wire:submit.prevent="addMateriFoto" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" wire:model="judul">
                    @error('judul')
                        <div class="mt-2 text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                    <div class="form-group mb-3">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" wire:model="foto">
                        @error('foto')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label>Deskripsi</label>
                        <textarea class="form-control" style="resize: none;" rows="5" name="deskripsi" wire:model="deskripsi"></textarea>
                        @error('deskripsi')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                @endif
                </div>
        </div>
    </div>
</div>


</div>
