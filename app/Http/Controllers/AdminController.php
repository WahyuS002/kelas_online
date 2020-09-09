<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

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
}
