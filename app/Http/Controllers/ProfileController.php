<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('pages.profile.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('pages.profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->all();

        $nama_foto = $request->foto->getClientOriginalName();
        $foto = $request->foto->storeAs('profile', $nama_foto);
        $data['foto'] = $foto;

        User::find($user->id)->update($data);

        return redirect()->route('profile');
    }
}
