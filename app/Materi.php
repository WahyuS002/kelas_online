<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    protected $fillable = ['user_id', 'kelas_id', 'judul', 'deskripsi', 'foto', 'video', 'pdf', 'urutan', 'status'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
