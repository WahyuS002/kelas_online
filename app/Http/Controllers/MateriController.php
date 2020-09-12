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

        $video = Youtube::getVideoInfo($kelas->video_preview);
        $duration = $materi_object->duration($video->contentDetails->duration);

        return view('pages.frontend.materi.detail', compact('materi', 'slug_kelas', 'kelas', 'duration'));
    }

    public function show($slug_kelas, $materi_id)
    {
        $materi = Materi::where('id', $materi_id)->first();
        return view('pages.frontend.materi.show', compact('materi'));
    }
}
