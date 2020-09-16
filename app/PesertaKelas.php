<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaKelas extends Model
{
    protected $table = 'peserta_kelas';

    protected $fillable = ['kelas_id', 'user_id'];
}
