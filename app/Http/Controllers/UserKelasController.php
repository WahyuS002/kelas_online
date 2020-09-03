<?php

namespace App\Http\Controllers;

use App\KategoriKelas;
use Illuminate\Http\Request;
use App\Kelas;

class UserKelasController extends Controller
{
    public function index()
    {
        $kelas = auth()->user()->kelas()->latest()->get();

        return view('pages.kelas.index', compact('kelas'));
    }

    public function admin()
    {
        $kelas = Kelas::latest()->get();

        return view('pages.kelas.admin', compact('kelas'));
    }

    public function verifikasi($id)
    {
        return view('pages.kelas.verifikasi', compact('id'));
    }

    public function create()
    {
        $kategori = KategoriKelas::get();

        return view('pages.kelas.create', compact('kategori'));
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

        return redirect()->route('kelas')->with('success', 'Kelas telah ditambahkan');
    }
}
