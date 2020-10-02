<?php

namespace App\Http\Livewire\Kelas;

use Livewire\Component;

class VerifyUser extends Component
{
    public $peserta, $nama;

    public function mount($peserta)
    {
        $this->peserta = $peserta;
    }

    public function modal($id)
    {
        $this->nama = 'testing';
    }

    public function render()
    {
        return view('livewire.kelas.verify-user');
    }
}
