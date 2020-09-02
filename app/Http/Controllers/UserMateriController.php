<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Materi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserMateriController extends Controller
{
    public function index(Kelas $kelas)
    {
        $kelas_id = $kelas->id;
        $materi = Materi::where('kelas_id', $kelas_id)->get();
        return view('pages.materi.index', compact('kelas', 'materi'));
    }

    public function create($id)
    {
        return view('pages.materi.create', compact('id'));
    }

    public function store(Request $request, $id)
    {
        $data = $request->all();
        $data['kelas_id'] = $id;

        auth()->user()->materi()->create($data);

        return redirect()->route('kelas.materi', $id);
    }
}
