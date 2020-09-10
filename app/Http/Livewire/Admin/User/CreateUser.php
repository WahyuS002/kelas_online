<?php

namespace App\Http\Livewire\Admin\User;

use App\Admin;
use Livewire\Component;
use App\KategoriKelas;

class CreateUser extends Component
{
    public $name, $email, $kategori_id;

    public function render()
    {
        $kategori = KategoriKelas::all();
        return view('livewire.admin.user.create-user', compact('kategori'));
    }

    public function selectItem()
    {
        $this->dispatchBrowserEvent('openExampleModal');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
    }


    public function create()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'kategori_id' => 'required',
        ]);

        $validatedData['password'] = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $validatedData['role'] = 'reviewer';

        Admin::create($validatedData);

        session()->flash('toast_success', 'Users Created Successfully.');

        $this->resetInputFields();

        $this->dispatchBrowserEvent('closeExampleModal'); // Close model to using to jquery

        $this->emit('userAdded');
    }
}
