<?php

namespace App\Http\Livewire\Kelas;

use Livewire\Component;

class JenjangLevel extends Component
{
    // Jenjang  - Level
    public $levelSD = ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6',];
    public $levelSMP = ['Kelas 7', 'Kelas 8', 'Kelas 9'];
    public $levelSMA = ['Kelas 10', 'Kelas 11', 'Kelas 12'];
    public $levelKuliah = ['Diploma', 'S1', 'S2', 'S3'];
    public $levelUmum = ['Beginner', 'Intermediate', 'Advanced'];

    public $jenjang;

    public function render()
    {
        return view('livewire.kelas.jenjang-level');
    }
}
