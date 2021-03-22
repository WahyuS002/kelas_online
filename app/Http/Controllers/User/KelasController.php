<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\KelasRequest;
use App\KategoriKelas;
use App\Kelas;
use App\PesertaKelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = auth()->user()->kelas()->latest()->get();

        return view('private.kelas.index', compact('kelas'));
    }

    public function admin()
    {
        $kelas = Kelas::latest()->get();

        return view('private.kelas.admin', compact('kelas'));
    }

    public function verifikasi($id)
    {
        return view('private.kelas.verifikasi', compact('id'));
    }

    public function create()
    {
        $kategori = KategoriKelas::get();

        return view('private.kelas.create', compact('kategori'));
    }

    public function store(KelasRequest $request)
    {
        // Objek
        $kelas = new Kelas();

        $data = $request->validated();

        $nama_foto = $request->thumbnail->getClientOriginalName();
        $foto = $request->thumbnail->storeAs("kelas", $nama_foto);
        $data['thumbnail'] = $foto;

        $data['user_id'] = auth()->user()->id;

        $data['status'] = 'draf';
        $data['video_preview'] = $kelas->YoutubeID($request->video_preview);

        $k = Kelas::create($data);

        $k->addMedia($request->thumbnail)->toMediaCollection('kelas');

        return redirect()->route('user.kelas')->with('success', 'Kelas telah ditambahkan');
    }

    public function edit($slug_kelas)
    {
        $kategori = KategoriKelas::get();
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        return view('private.kelas.edit', compact('kategori', 'kelas'));
    }

    public function update($slug_kelas, KelasRequest $request)
    {
        Kelas::where('slug_kelas', $slug_kelas)->update($request->only([
            'nama_kelas', 'jenjang', 'level', 'harga', 'durasi_kelas', 'kapasitas_kelas',
            'kategori_id', 'video_preview', 'thumbnail', 'deskripsi'
        ]));

        return redirect()->route('user.kelas')->with('toast_success', 'Kelas Berhasil Diedit');
    }

    public function view($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        $materi_kelas = $kelas->materi;

        return view('private.kelas.view', compact('kelas', 'materi_kelas', 'slug_kelas'));
    }

    public function submit(Kelas $kelas)
    {
        Kelas::where('id', $kelas->id)->update(['status' => 'review']);

        return redirect()->route('user.kelas')->with('success', 'Kelas Berhasil Diajukan Mohon Tunggu 1x24 jam');
    }

    // Beli Kelas
    public function checkout($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        $total_harga = $kelas->harga + 170;

        return view('private.kelas.checkout', compact('kelas', 'total_harga'));
    }

    public function kelasBeli($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();
        $user_id = auth()->user()->id;

        PesertaKelas::create([
            'kelas_id' => $kelas->id,
            'user_id' => $user_id,
        ]);
    }

    public function enrolled()
    {
        $data = auth()->user()->pesertaKelas()->get();

        return view('private.kelas.enrolled', compact('data'));
    }

    public function verifUser(Kelas $kelas)
    {
        $peserta = $kelas->users;

        return view('private.kelas.verif-user', compact('peserta'));
    }
}
