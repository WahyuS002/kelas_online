<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Materi;
use App\PesertaKelas;

use App\Progress;
use Carbon\Carbon;

use Alaouy\Youtube\Facades\Youtube;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

    public function show($slug_kelas, $slug_materi_encrypt)
    {
        $slug_materi = Crypt::decrypt($slug_materi_encrypt);

        $materi = Materi::where('slug_materi', $slug_materi)->first();
        $materi_id = $materi->id;

        $kelas_id = Kelas::where('slug_kelas', $slug_kelas)->first()->id;
        $user_id = auth()->user()->id;

        $id_peserta_kelas = PesertaKelas::where(['kelas_id' => $kelas_id, 'user_id' => $user_id])->first()->id;

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
