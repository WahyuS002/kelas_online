<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    protected $table = 'progress';

    protected $fillable = ['id', 'id_peserta_kelas', 'id_kelas', 'id_materi', 'waktu_baca', 'waktu_mengerti'];
}
