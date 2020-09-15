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
    <button class="btn btn-success btn-block p-2 mt-4"><h5 class="text-white">KONFIRMASI PEMBAYARAN</h5></button>
    @endif
</div>
