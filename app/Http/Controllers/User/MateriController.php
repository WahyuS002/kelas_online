<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Kelas;
use App\Materi;
use Illuminate\Http\Request;
use App\Http\Requests\MateriRequest;
use App\Http\Requests\NewMateriRequest;
use App\Log;

class MateriController extends Controller
{
    public function index($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        $kelas_id = $kelas->id;
        $materi = Materi::where('kelas_id', $kelas_id)->get();
        return view('private.materi.index', compact('kelas', 'materi'));
    }

    public function create($slug_kelas)
    {
        $id = Kelas::where('slug_kelas', $slug_kelas)->first();

        return view('private.materi.create', compact('id'));
    }

    public function store(MateriRequest $request, $slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        // Objek
        $materi = new Materi();

        $data = $request->all();
        $data['kelas_id'] = $kelas->id;
        $data['video'] = $materi->YoutubeID($request->video);

        auth()->user()->materi()->create($data);

        return redirect()->route('user.kelas.materi', $slug_kelas)->with('success', 'Materi Berhasil Ditambahkan');
    }

    public function edit($kelas, Materi $materi)
    {
        return view('private.materi.edit', compact('materi'));
    }

    public function update(Materi $materi, Request $request)
    {
        $slug_materi = $request->segment(4);
        $materi = Materi::where('slug_materi', $slug_materi)->first();
        $kelas = Kelas::where('id', $materi->kelas_id)->first();

        $materi->update([$request->all()]);

        return redirect()->route('user.kelas.materi', $kelas->slug_kelas)->with('success', 'Materi Berhasil Diedit');
    }

    public function show($kelas, $materi_id)
    {
        $materi = Materi::where('id', $materi_id)->first();

        return view('private.kelas.show', compact('materi'));
    }

    public function createMateriNew($slug_kelas)
    {
        $id = Kelas::where('slug_kelas', $slug_kelas)->first();

        return view('revision.materi.create', $id);
    }

    public function storeMateriNew(NewMateriRequest $request, $id)
    {
        $id_kelas = $request->segment(3);
        $kelas = Kelas::where('id', $id_kelas)->first();
        $slug_kelas = $kelas->slug_kelas;

        $data['user_id'] = auth()->user()->id;

        $data_field = $request->except('keterangan', '_token');
        $data['data'] = json_encode($data_field);

        $keterangan = $request->only('keterangan');
        $data['keterangan'] = implode('', $keterangan);

        Log::create($data);

        return redirect()->route('user.kelas.materi', $slug_kelas);
    }

    public function order(Request $request)
    {
        foreach ($request->positions as $position) {
            $index = $position[0];
            $newPositon = $position[1];

            Materi::where('id', $index)->update(['urutan' => $newPositon]);
        }

        return response('Update Successfully', 200);
    }
}
