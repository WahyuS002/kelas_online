<?php

namespace App\Http\Livewire\Materi;

use Carbon\Carbon;
use Livewire\Component;

use App\Kelas;
use App\PesertaKelas;

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

        $peserta = PesertaKelas::where(['user_id' => $user_id, 'kelas_id' => $kelas_id]);

        $jumlah_materi_selesai = $peserta->pluck('jumlah_materi_selesai')->first();

        $i = $jumlah_materi_selesai + 1;

        $peserta->update([
            'jumlah_materi_selesai' => 1,
        ]);

        auth()->user()->baca()->save($this->materi, [
            'mengerti' => true,
            'waktu' => Carbon::now(),
        ]);
    }
}
