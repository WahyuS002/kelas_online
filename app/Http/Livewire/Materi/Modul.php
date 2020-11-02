<?php

namespace App\Http\Livewire\Materi;

use App\Kelas;
use App\PesertaKelas;
use Livewire\Component;

class Modul extends Component
{
    public $materi, $progress;
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
        $kelas_id = Kelas::where('slug_kelas', $slug)->first()->id;
        $user_id = auth()->user()->id;

        $peserta = PesertaKelas::where(['user_id' => $user_id, 'kelas_id' => $kelas_id])->first();
        $this->progress = $peserta->jumlah_materi_selesai / $peserta->jumlah_materi * 100;

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
