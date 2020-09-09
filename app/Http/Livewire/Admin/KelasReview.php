<?php

namespace App\Http\Livewire\Admin;

use App\Kelas;
use Livewire\Component;

class KelasReview extends Component
{
    public $kelas;
    public $itemId, $action;

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function selectItem($itemId, $action)
    {
        $this->itemId = $itemId;

        if ($action == 'setuju') {
            $this->dispatchBrowserEvent('openSetujuModal');
        } else {
            $this->dispatchBrowserEvent('openTolakModal');
        }
    }

    // Modal
    public function terima()
    {
        Kelas::where('id', $this->itemId)->update(['status' => 'publish']);
        $this->dispatchBrowserEvent('closeSetujuModal');
    }

    public function render()
    {
        return view('livewire.admin.kelas-review');
    }
}
