<?php

namespace App\Http\Livewire\Materi;

use App\Kelas;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

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

    public function mount($materi, $slug)
    {
        if (Auth::check()) {
            $kelas_id = Kelas::where('slug_kelas', $slug)->first()->id;
            $user_id = auth()->user()->id;
        }

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
