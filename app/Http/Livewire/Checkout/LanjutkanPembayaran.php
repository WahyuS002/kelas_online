<?php

namespace App\Http\Livewire\Checkout;

use Livewire\Component;

class LanjutkanPembayaran extends Component
{
    public $klik = false;
    public function render()
    {
        return view('livewire.checkout.lanjutkan-pembayaran');
    }

    public function lanjutkan()
    {
        $this->klik = true;
    }
}
