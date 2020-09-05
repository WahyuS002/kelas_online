<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Materi;
use Illuminate\Http\Request;
use App\Http\Requests\MateriRequest;

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

    public function store(MateriRequest $request, $id)
    {
        // Objek
        $materi = new Materi();

        $data = $request->all();
        $data['kelas_id'] = $id;
        $data['video'] = $materi->YoutubeID($request->video);

        auth()->user()->materi()->create($data);

        return redirect()->route('user.kelas.materi', $id);
    }

    public function edit($kelas, Materi $materi)
    {
        return view('pages.materi.edit', compact('materi'));
    }

    public function update(Materi $materi, Request $request)
    {
        $materi->update($request->all());

        return redirect()->back();
    }

    public function show($kelas, $materi_id)
    {
        $materi = Materi::where('id', $materi_id)->first();

        return view('pages.materi.show', compact('materi'));
    }
}
