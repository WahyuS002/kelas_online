<?php

namespace App\Http\Livewire\Kelas;

use App\PesertaKelas;
use Livewire\Component;

class Verifying extends Component
{
    public $peserta, $bukti;
    public $modalClick = false;

    public function modal($id)
    {
        $peserta = PesertaKelas::where('id', $id)->first();
        $bukti_pembayaran = $peserta->bukti_pembayaran;

        $this->bukti = $bukti_pembayaran;
        $this->modalClick = true;
    }

    public function closeModal()
    {
        $this->modalClick = false;
    }

    public function mount($peserta)
    {
        $this->peserta = $peserta;
    }

    public function render()
    {
        return view('livewire.kelas.verifying');
    }
}
