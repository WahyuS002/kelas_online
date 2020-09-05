<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\KategoriKelas;
use Illuminate\Http\Request;
use App\Kelas;
use App\Materi;

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

    public function store(KelasRequest $request)
    {
        $data = $request->all();

        $nama_foto = $request->thumbnail->getClientOriginalName();
        $foto = $request->thumbnail->storeAs("kelas", $nama_foto);
        $data['thumbnail'] = $foto;

        $data['slug_kelas'] = \Str::slug($request->nama_kelas);
        $data['user_id'] = auth()->user()->id;

        // dd($request->all());

        Kelas::create($data);

        return redirect()->route('user.kelas')->with('success', 'Kelas telah ditambahkan');
    }

    public function view($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        $materi_kelas = $kelas->materi;

        return view('pages.kelas.view', compact('kelas', 'materi_kelas', 'slug_kelas'));
    }
}
