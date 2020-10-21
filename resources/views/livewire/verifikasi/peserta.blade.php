<div class="table-responsive mb-4">
    <table id="column-filter" class="table">
        <thead>
            <tr>
                <th class="checkbox-column"> No. </th>
                <th>Nama</th>
                <th>Harga Bayar</th>
                <th>Bukti Pembayaran</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peserta as $p)
            <tr>
                <td class="checkbox-column"> {{ $loop->iteration }} </td>
                <td>{{ $p->name }}</td>
                <td>{{ number_format($p->pivot->harga_bayar) }}</td>
                <td>
                    @if ($p->pivot->bukti_pembayaran != null)
                    <div>Ada</div>
                    @else
                    <div>Tidak Ada</div>
                    @endif
                </td>
                <td>
                    {{ $p->pivot->status }}
                </td>
                <td class="text-center">
                    @if ($p->pivot->status == 'ya')
                    <button class="btn btn-sm btn-success" disabled>
                        Terverifikasi
                    </button>
                    @elseif ($p->pivot->status == 'tidak')
                    <button class="btn btn-sm btn-danger">
                        Ditolak
                    </button>
                    @else
                    <button class="btn btn-sm btn-primary" wire:click="verifikasi({{ $p }})">
                        Verifikasi
                    </button>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="verifikasiModal" tabindex="-1" role="dialog" aria-labelledby="verifikasiModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('storage/' . $bukti_pembayaran ) }}" alt="" style="width: 450px; height: 100%; object-fit: cover;">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger " data-dismiss="modal"><i class="flaticon-cancel-12"></i> Tolak</button>
                    <button type="button" class="btn btn-primary" wire:click="confirm({{ $id_peserta }})">Verifikasi</button>
                </div>
            </div>
        </div>
    </div>


</div>