<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['id_materi', 'id_kelas', 'komentar', 'id_komentar'];
}
