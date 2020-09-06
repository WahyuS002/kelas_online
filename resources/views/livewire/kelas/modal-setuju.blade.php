<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Syarat & Ketentuan</h5>
    </div>
    <div class="modal-body">
        <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. </p>
        <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. </p>
        <div class="custom-control custom-checkbox d-flex justify-content-center">
            <input type="checkbox" class="custom-control-input" id="customCheck1" wire:model="setuju">
            <label class="custom-control-label" for="customCheck1">Saya Setuju</label>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
        <form action="{{ route('user.kelas.submit', ['kelas' => $kelas->slug_kelas]) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary" {{ $button }}>Save</button>
        </form>
    </div>
</div>