<div>
    <td>
        <a data-toggle="modal" data-target="#exampleModal" href="#" class="badge badge-primary text-white">Verifikasi</a>
    </td>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>

                </div>
                <div class="modal-body verifikasi-peserta">
                    <img src="{{ asset('storage/' . $kelas->thumbnail) }}">
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-danger">Tolak</button>
                    <button type="button" class="btn btn-primary">Verifikasi</button>
                </div>
            </div>
        </div>
    </div>


</div>
