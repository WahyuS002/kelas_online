<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProfileRequest;
use App\User;

class PengaturanController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('private.pengaturan.index', compact('user'));
    }


    public function profile()
    {
        $user = auth()->user();

        return view('private.pengaturan.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('private.pengaturan.bio-edit', compact('user'));
    }

    public function update(ProfileRequest $request, User $user)
    {
        $data = $request->validated();

        $nama_foto = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('profile', $nama_foto);
        $data['foto'] = $foto;

        User::find($user->id)->update($data);

        return redirect()->route('user.pengaturan');
    }
}
