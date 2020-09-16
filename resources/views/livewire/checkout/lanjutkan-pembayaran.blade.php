<div>
    @if (!$klik)
    <button class="btn btn-primary btn-block p-2 mt-4" wire:click="lanjutkan"><h5 class="text-white">LANJUTKAN PEMBAYARAN</h5></button>
    @else
    <h5 class="card-title mt-2 mb-3">Transfer Pembayaran : </h5>
    <img src="{{ asset('storage/images/logo_bank_bca_kelas_online.png') }}" class="icon-transfer" style="width: 80px; height: 30px;">
    <div class="d-flex justify-content-between">
        <h6 class="card-subtitle text-muted mt-3">Bank</h6>
        <h5 class="card-title">BCA</h5>
    </div>
    <div class="d-flex justify-content-between">
        <h6 class="card-subtitle text-muted mt-3">No Rek</h6>
        <h5 class="card-title">1192175601</h5>
    </div>
    <div class="d-flex justify-content-between">
        <h6 class="card-subtitle text-muted mt-3">Penerima</h6>
        <h5 class="card-title">John Doe</h5>
    </div>
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success btn-block p-2 mt-4"><h5 class="text-white">KONFIRMASI PEMBAYARAN</h5></button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form wire:submit.prevent="konfirmasi">
                <div class="modal-body">
                <div class="form-group">
                    <label for="bukti">Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="bukti" wire:model="bukti">
                </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        </div>
    </div>
    @endif
</div>
