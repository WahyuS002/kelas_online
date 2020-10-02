<div>
    <td>
        <button data-toggle="modal" data-target="#exampleModal" class="badge badge-primary" wire:click="modal({{ $peserta->id }})">Verifikasi</button>
    </td>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg> ... </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="modal-text" wire:model="nama"> </p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>


