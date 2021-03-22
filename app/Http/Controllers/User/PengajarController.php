<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Kelas;

class PengajarController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $kelas = Kelas::where('user_id', $user_id)->get();

        return view('private.pengajar.index', compact('kelas'));
    }

    public function kelas($slug_kelas)
    {
        $user_id = auth()->user()->id;
        $kelas = Kelas::where(['user_id' => $user_id, 'slug_kelas' => $slug_kelas])->first();
        $peserta = $kelas->users;

        return view('private.pengajar.kelas', compact('kelas', 'peserta'));
    }

    public function withdraw()
    {
        return view('private.pengajar.withdraw');
    }
}
