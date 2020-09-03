<?php

namespace App\Http\Livewire\Materi;

use Livewire\Component;

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
        auth()->user()->baca()->save($this->materi, ['mengerti' => true]);
    }
}
