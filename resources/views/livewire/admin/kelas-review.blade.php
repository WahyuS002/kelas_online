<div class="d-flex justify-content-center">

    @if ($kelas->status == 'draf')
    <button type="button" class="btn btn-dark btn-rounded mt-3 custom-button" disabled>
        Terima
    </button>
    <button type="button" class="btn btn-dark btn-rounded mt-3 custom-button ml-4" disabled>
        Tolak
    </button>
    @else
    <button type="button" class="btn btn-secondary btn-rounded mt-3 custom-button" wire:click="selectItem({{ $kelas->id }}, 'setuju')">
        Terima
    </button>
    <button type="button" class="btn btn-danger btn-rounded mt-3 custom-button ml-4"  wire:click="selectItem({{ $kelas->id }}, 'tolak')">
        Tolak
    </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="modalFormSetuju" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta, nostrum?
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" wire:click="terima">Yes</button>
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFormTolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    INI MODAL TOLAK
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" wire:click="tolak">Yes</button>
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                </div>
            </div>
        </div>
    </div>
</div>

