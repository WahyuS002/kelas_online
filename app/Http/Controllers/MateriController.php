<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Materi;

use Alaouy\Youtube\Facades\Youtube;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function detail(Kelas $kelas)
    {
        $materi_object = new Materi();

        $kelas_id = $kelas->id;
        $slug_kelas = $kelas->slug_kelas;
        $materi = Materi::where('kelas_id', $kelas_id)->get();

        $video_kelas = Youtube::getVideoInfo($kelas->video_preview);
        $duration_kelas = $materi_object->duration($video_kelas->contentDetails->duration);

        return view('pages.frontend.materi.detail', compact('materi', 'slug_kelas', 'kelas', 'duration_kelas'));
    }

    public function show($slug, $materi_id)
    {
        $kelas = Kelas::where('slug_kelas', $slug)->first();
        $kelas_id = $kelas->id;
        $materi = Materi::where(['urutan' => $materi_id, 'kelas_id' => $kelas_id])->first();
        return view('pages.frontend.materi.show', compact('materi', 'slug'));
    }
}
