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
        // Objek
        $materi = new Materi();

        // Status Kelas
        // $kelas_id = Kelas::where('id', $id)->get();

        // $materi_urutan = Materi::where('kelas_id', $id)->get();


        $data = $request->all();
        $data['kelas_id'] = $id;
        $data['video'] = $materi->YoutubeID($request->video);

        // if ($materi_urutan[0]['urutan']) {
        //     $i = 1;
        //     $data['urutan'] = $i++;
        // }

        auth()->user()->materi()->create($data);

        // if (!$kelas[0]['status']) {
        //     Kelas::where('id', $id)->update(['status' => 'waiting']);
        // }

        return redirect()->route('kelas.materi', $id);
    }
}
