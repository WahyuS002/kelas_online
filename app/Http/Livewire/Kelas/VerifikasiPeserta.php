<?php

namespace App\Http\Livewire\Kelas;

use Livewire\Component;

class VerifikasiPeserta extends Component
{
    public $kelas, $key;

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function render()
    {
        return view('livewire.kelas.verifikasi-peserta');
    }
}
