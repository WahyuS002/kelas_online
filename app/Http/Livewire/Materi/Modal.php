<?php

namespace App\Http\Livewire\Materi;

use Livewire\Component;

use App\Materi;
use Livewire\WithFileUploads;

class Modal extends Component
{
    use WithFileUploads;

    public $type, $foto, $video, $pdf, $judul, $deskripsi;
    public $kelas;

    public function mount($kelas)
    {
        $this->kelas = $kelas;
    }

    public function addMateriVideo()
    {
        $user_id = auth()->user()->id;
        $kelas_id = $this->kelas->id;

        $this->validate([
            'judul' => 'required|min:5|Max:255',
            'deskripsi' => 'required|max:255',
            'video' => 'required|mimes:mp4,mov,mkv',
        ]);

        Materi::create([
            'user_id' => $user_id,
            'kelas_id' => $kelas_id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'video' => $this->video,
        ]);
    }

    public function addMateriPdf()
    {
        $user_id = auth()->user()->id;
        $kelas_id = $this->kelas->id;

        $this->validate([
            'judul' => 'required|min:5|Max:255',
            'deskripsi' => 'required|max:255',
            'pdf' => 'required|mimes:pdf',
        ]);

        $pdfName = $this->pdf->store("materi/pdf");

        Materi::create([
            'user_id' => $user_id,
            'kelas_id' => $kelas_id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'pdf' => $pdfName,
        ]);
    }

    public function addMateriFoto()
    {
        $user_id = auth()->user()->id;
        $kelas_id = $this->kelas->id;

        $this->validate([
            'judul' => 'required|min:5|Max:255',
            'deskripsi' => 'required|max:255',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:1024',
        ]);

        $imageName = $this->foto->store("materi/foto");

        Materi::create([
            'user_id' => $user_id,
            'kelas_id' => $kelas_id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'foto' => $imageName,
        ]);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'judul' => 'required|min:5|Max:255',
            'deskripsi' => 'required|max:255',
            'foto' => 'required|mimes:jpeg,jpg,png|max:1024',
            'video' => 'required|mimes:mp4,mov,mkv',
            'pdf' => 'required|mimes:pdf',
        ]);
    }

    public function render()
    {
        return view('livewire.materi.modal');
    }
}
