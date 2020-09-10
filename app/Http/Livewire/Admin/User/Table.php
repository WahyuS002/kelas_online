<?php

namespace App\Http\Livewire\Admin\User;

use App\Admin;
use Livewire\Component;

class Table extends Component
{
    protected $listeners = ['userAdded'];

    public function userAdded()
    {
    }

    public function render()
    {
        $admin = Admin::all();
        return view('livewire.admin.user.table', compact('admin'));
    }
}
