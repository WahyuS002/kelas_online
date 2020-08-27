<?php

namespace App\Http\Controllers;

use App\KategoriKelas;
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
        // $mapel = Mapel::get();
        // $level = LevelKelas::get();
        // $tingkatan = TingkatanKelas::get();
        $kategori = KategoriKelas::get();

        return view('kelas.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $nama_foto = $request->thumbnail->getClientOriginalName();
        $foto = $request->thumbnail->storeAs("kelas", $nama_foto);
        $data['thumbnail'] = $foto;

        $data['slug_kelas'] = \Str::slug($request->nama_kelas);
        $data['user_id'] = auth()->user()->id;

        // dd($request->all());

        Kelas::create($data);

        return redirect()->route('kelas');
    }
}
