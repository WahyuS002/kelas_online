<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $kelas = Kelas::where('user_id', $user_id)->get();

        return view('pages.pengajar.index', compact('kelas'));
    }

    public function kelas($slug_kelas)
    {
        $user_id = auth()->user()->id;
        $kelas = Kelas::where(['user_id' => $user_id, 'slug_kelas' => $slug_kelas])->first();
        $peserta = $kelas->users;

        return view('pages.pengajar.kelas', compact('kelas', 'peserta'));
    }

    public function withdraw()
    {
        return view('pages.pengajar.withdraw');
    }
}
