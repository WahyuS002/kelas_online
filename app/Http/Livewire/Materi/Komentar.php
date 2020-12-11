<?php

namespace App\Http\Livewire\Materi;

use App\Comment;
use App\Events\CommentsEvent;
use Livewire\Component;

use App\Kelas;

class Komentar extends Component
{
    public $materi, $kelas_id, $materi_id;
    public $comment_value, $sub_comment_value;

    public $all_comments;
    public $comments;
    public $amount = 2;

    // protected $listeners = ['echo-private:comment-channel,comment-created' => 'notifyNewOrder'];

    protected $listeners = ['commenAdded' => '$refresh'];

    public function mount($materi, $slug)
    {
        $kelas = Kelas::where('slug_kelas', $slug)->first();
        $kelas_id = $kelas->id;

        $this->materi = $materi;
        $this->kelas_id = $kelas_id;
        $this->materi_id = $materi->id;
    }

    public function render()
    {
        $c = Comment::where(['id_materi' => $this->materi->id, 'id_komentar' => 0]);
        $this->comments = $c->take($this->amount)->get();
        $this->all_comments = $c->count();

        $subComments = Comment::where('id_materi', $this->materi->id)->get();

        return view('livewire.materi.komentar', compact('subComments'));
    }

    public function comment()
    {
        $comment = Comment::create([
            'id_materi' => $this->materi->id,
            'id_kelas' => $this->kelas_id,
            'komentar' => $this->comment_value,
        ]);

        event(new CommentsEvent($comment));
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

    public function load()
    {
        $this->amount += 1;
    }
}
