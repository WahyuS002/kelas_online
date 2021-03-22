<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Kelas;
use App\KategoriKelas;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    /*
    | Function untuk Kelas
    */

    public function kelas()
    {
        $kelas = Kelas::get();
        return view('admin.private.kelas.index', compact('kelas'));
    }

    public function kelasView(Kelas $kelas)
    {
        $slug_kelas = Kelas::where('slug_kelas', $kelas->slug_kelas)->first();
        $materi_kelas = $kelas->materi;
        return view('admin.private.kelas.view', compact('kelas', 'materi_kelas', 'slug_kelas'));
    }

    /*
    | Function untuk User
    */
    public function userIndex()
    {
        return view('admin.private.user.index');
    }

    /*
    | Function untuk Kategori
    */
    public function kategoriIndex()
    {
        $kategori = KategoriKelas::all();
        return view('admin.private.kategori.index', compact('kategori'));
    }

    /*
    | Function untuk menampilkan view peserta kelas untuk di verif admin
    */
    public function verifikasiPeserta()
    {
        $kelas = Kelas::where('status', 'publish')->get();

        return view('private.kelas.verifikasi-peserta.index', compact('kelas'));
    }

    public function verifikasiPesertaDetail($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        return view('private.kelas.verifikasi-peserta.detail', compact('kelas'));
    }
}
