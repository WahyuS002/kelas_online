<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LevelKelas;
use App\Mapel;
use App\TingkatanKelas;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::latest()->get();

        return view('kelas.index', compact('kelas'));
    }

    public function admin()
    {
        $kelas = Kelas::latest()->get();

        return view('kelas.admin', compact('kelas'));
    }

    public function verifikasi($id)
    {
        return view('kelas.verifikasi', compact('id'));
    }

    public function create()
    {
        $mapel = Mapel::get();
        $level = LevelKelas::get();
        $tingkatan = TingkatanKelas::get();

        return view('kelas.create', compact('mapel', 'level', 'tingkatan'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $nama_gambar = $request->gambar->getClientOriginalName();
        $gambar = $request->gambar->storeAs('kelas', $nama_gambar);
        $data['gambar'] = $gambar;

        Kelas::create($data);

        return redirect()->route('kelas');
    }
}
