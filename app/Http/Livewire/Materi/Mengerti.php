<?php

namespace App\Http\Livewire\Materi;

use Carbon\Carbon;
use Livewire\Component;

use App\Kelas;
use App\PesertaKelas;
use App\Progress;

class Mengerti extends Component
{
    public $materi;

    public function mount($materi)
    {
        $this->materi = $materi;
    }

    public function render()
    {
        return view('livewire.materi.mengerti');
    }

    public function sayaMengerti()
    {
        $kelas_id = $this->materi->kelas_id;

        $kelas_id = Kelas::where('id', $kelas_id)->first()->id;
        $user_id = auth()->user()->id;

        $id_peserta_kelas = PesertaKelas::where(['kelas_id' => $kelas_id, 'user_id' => $user_id])->first()->id;

        $materi_id = $this->materi->id;
        $progress = Progress::where([
            'id_peserta_kelas' => $id_peserta_kelas,
            'id_kelas' => $kelas_id,
            'id_materi' => $materi_id,
        ]);

        $progress->update(['waktu_mengerti' => Carbon::now()]);

        auth()->user()->baca()->save($this->materi, [
            'mengerti' => true,
            'waktu' => Carbon::now(),
        ]);
    }
}
