<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Admin;
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
        return view('admin.pages.kelas.index', compact('kelas'));
    }

    public function kelasView(Kelas $kelas)
    {
        $slug_kelas = Kelas::where('slug_kelas', $kelas->slug_kelas)->first();
        $materi_kelas = $kelas->materi;
        return view('admin.pages.kelas.view', compact('kelas', 'materi_kelas', 'slug_kelas'));
    }

    /*
    | Function untuk User
    */

    public function userIndex()
    {
        return view('admin.pages.user.index');
    }

    /*
    | Function untuk Kategori
    */

    public function kategoriIndex()
    {
        $kategori = KategoriKelas::all();
        return view('admin.pages.kategori.index', compact('kategori'));
    }

    /*
    | Function untuk menampilkan view peserta kelas untuk di verif admin
    */

    public function verifikasiPeserta()
    {
        $kelas = Kelas::where('status', 'publish')->get();

        return view('pages.kelas.verifikasi-peserta.index', compact('kelas'));
    }

    public function verifikasiPesertaDetail($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        return view('pages.kelas.verifikasi-peserta.detail', compact('kelas'));
    }
}
