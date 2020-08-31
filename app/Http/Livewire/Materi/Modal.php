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
            'pdf' => 'required|mimes:pdf',
            'foto' => 'required|mimes:jpeg,jpg,png|max:1024'
        ]);
    }

    public function render()
    {
        return view('livewire.materi.modal');
    }
}
