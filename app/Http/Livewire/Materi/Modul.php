<?php

namespace App\Http\Livewire\Materi;

use App\Kelas;
use Livewire\Component;

class Modul extends Component
{
    public $materi;
    public $log = false;

    public function logClick()
    {
        $this->log = true;
    }

    public function materiClick()
    {
        $this->log = false;
    }

    public function mount($materi)
    {
        $this->materi = $materi;
    }

    public function render()
    {
        $kelas_id = $this->materi[0]->kelas_id;
        $kelas = Kelas::where('id', $kelas_id)->first();
        $slug_kelas = $kelas->slug_kelas;

        return view('livewire.materi.modul', compact('slug_kelas'));
    }
}
