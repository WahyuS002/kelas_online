<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Materi;

use App\Progress;
use Carbon\Carbon;

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

    public function show($slug_kelas, $slug_materi, $urutan)
    {
        $materi = Materi::where(['slug_materi' => $slug_materi, 'urutan' => $urutan])->first();
        $materi_id = $materi->id;

        $kelas_id = Kelas::where('slug_kelas', $slug_kelas)->first()->id;
        $id_peserta_kelas = auth()->user()->id;

        $progress = Progress::where([
            'id_peserta_kelas' => $id_peserta_kelas,
            'id_kelas' => $kelas_id,
            'id_materi' => $materi_id,
        ]);

        $progressIsExist = $progress->exists();

        if (!$progressIsExist) {
            Progress::create([
                'id_peserta_kelas' => $id_peserta_kelas,
                'id_kelas' => $kelas_id,
                'id_materi' => $materi_id,
                'waktu_baca' => Carbon::now(),
            ]);
        } elseif ($progressIsExist && $progress->first()->waktu_mengerti == null) {
            $progress->update(['waktu_baca' => Carbon::now()]);
        }

        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        $kelas_id = $kelas->id;
        // $materi = Materi::where(['urutan' => $materi_id, 'kelas_id' => $kelas_id])->first();
        return view('pages.frontend.materi.show', compact('materi', 'slug_kelas'));
    }
}
