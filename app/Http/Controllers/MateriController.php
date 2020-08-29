<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(Kelas $kelas)
    {
        return view('pages.materi.index', compact('kelas'));
    }

    public function create()
    {
        return view('pages.materi.create');
    }
}
