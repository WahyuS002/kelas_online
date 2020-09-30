<?php

namespace App\Http\Livewire\Search;

use App\Kelas;
use Livewire\Component;

class KelasSearch extends Component
{
    public $query, $kelas;

    public function mount()
    {
        $this->query = '';
        $this->kelas = [];
    }

    public function updatedQuery()
    {
        $this->kelas = Kelas::where('nama_kelas', 'like', '%' . $this->query . '%')
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.search.kelas-search');
    }
}
