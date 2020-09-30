<?php

namespace App\Http\Livewire\Checkout;

use App\Kelas;
use App\PesertaKelas;
use Livewire\Component;
use Livewire\WithFileUploads;

class LanjutkanPembayaran extends Component
{
    use WithFileUploads;

    public $klik = false;
    public $bukti, $kelas;

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function render()
    {
        return view('livewire.checkout.lanjutkan-pembayaran');
    }

    public function lanjutkan()
    {
        $this->klik = true;
    }

    public function konfirmasi()
    {
        $kelas_id = $this->kelas->id;
        $user = auth()->user();
        $user_id = $user->id;

        $nama_kelas = $this->kelas->nama_kelas;
        $thumbnail_kelas = $this->kelas->thumbnail;
        $nama_user = $user->name;

        $this->validate([
            'bukti' => 'image|max:1024'
        ]);

        $bukti = $this->bukti->store("bukti-pembayaran");

        // PesertaKelas::where('id', $kelas_id)->updateOrCreate(['bukti_pembayaran' => $bukti, 'status' => 'waiting']);

        PesertaKelas::create([
            'kelas_id' => $kelas_id,
            'user_id' => $user_id,
            'nama_kelas' => $nama_kelas,
            'thumbnail_kelas' => $thumbnail_kelas,
            'nama_user' => $nama_user,
            'harga_bayar' => $this->kelas->harga,
            'bukti_pembayaran' => $bukti,
            'status' => 'waiting',
        ]);

        // return redirect()->route('');
    }
}
