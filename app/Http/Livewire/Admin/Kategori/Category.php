<?php

namespace App\Http\Livewire\Admin\Kategori;

use App\KategoriKelas;
use Livewire\Component;

class Category extends Component
{
    public $kategori;

    public function selectItem()
    {
        $this->dispatchBrowserEvent('openExampleModal');
    }

    public function create()
    {
        $validateData = $this->validate([
            'kategori' => 'required',
        ]);

        KategoriKelas::create($validateData);

        $this->dispatchBrowserEvent('closeExampleModal');
        $this->dispatchBrowserEvent('sweetAlert');
    }

    public function render()
    {
        return view('livewire.admin.kategori.category');
    }
}
