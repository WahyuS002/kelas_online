<?php

namespace App\Http\Livewire\Materi;

use App\Comment;
use Livewire\Component;

class Komentar extends Component
{
    public $materi;
    public $comment_value, $sub_comment_value;

    public function mount($materi)
    {
        $this->materi = $materi;
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
            'komentar' => $this->comment_value,
        ]);
    }

    public function subComment($id)
    {
        Comment::create([
            'id_materi' => $this->materi->id,
            'komentar' => $this->sub_comment_value,
            'id_komentar' => $id,
        ]);
    }
}
