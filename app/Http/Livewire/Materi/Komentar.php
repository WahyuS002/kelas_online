<?php

namespace App\Http\Livewire\Materi;

use App\Comment;
use Livewire\Component;

use App\Kelas;

class Komentar extends Component
{
    public $materi, $kelas_id;
    public $comment_value, $sub_comment_value;

    public function mount($materi, $slug)
    {
        $kelas = Kelas::where('slug_kelas', $slug)->first();
        $kelas_id = $kelas->id;

        $this->materi = $materi;
        $this->kelas_id = $kelas_id;
    }

    public function render()
    {
        $comments = Comment::where(['id_materi' => $this->materi->id, 'id_komentar' => 0])->get();
        $subComments = Comment::where('id_materi', $this->materi->id)->get();

        return view('livewire.materi.komentar', compact('comments', 'subComments'));
    }

    public function comment()
    {
        Comment::create([
            'id_materi' => $this->materi->id,
            'id_kelas' => $this->kelas_id,
            'komentar' => $this->comment_value,
        ]);
    }

    public function subComment($id)
    {
        Comment::create([
            'id_materi' => $this->materi->id,
            'id_kelas' => $this->kelas_id,
            'komentar' => $this->sub_comment_value,
            'id_komentar' => $id,
        ]);
    }
}
