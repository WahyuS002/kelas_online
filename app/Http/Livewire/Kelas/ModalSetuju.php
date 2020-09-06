<?php

namespace App\Http\Livewire\Kelas;

use Livewire\Component;

class ModalSetuju extends Component
{
    public $setuju, $kelas;
    public $button = 'disabled';

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function render()
    {
        if ($this->setuju) {
            $this->button = '';
        } else {
            $this->button = 'disabled';
        }

        return view('livewire.kelas.modal-setuju');
    }
}
