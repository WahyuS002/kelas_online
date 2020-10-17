<?php

namespace App\Http\Livewire\Verifikasi;

use App\PesertaKelas;
use Livewire\Component;

class Peserta extends Component
{
    public $kelas, $bukti_pembayaran, $nama_user, $harga_bayar, $id_peserta;

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function render()
    {
        $peserta = $this->kelas->users;

        return view('livewire.verifikasi.peserta', compact('peserta'));
    }

    public function verifikasi($peserta)
    {
        $this->bukti_pembayaran = $peserta['pivot']['bukti_pembayaran'];
        $this->nama_user = $peserta['name'];
        $this->harga_bayar = $peserta['pivot']['harga_bayar'];
        $this->id_peserta = $peserta['pivot']['id'];

        $this->dispatchBrowserEvent('openVerifikasiModal');
    }

    public function confirm($id)
    {
        $pesertaKelas = PesertaKelas::where('id', $id)->first();

        $pesertaKelas->update(['status' => 'ya']);
        $this->dispatchBrowserEvent('closeVerifikasiModal');
    }
}
