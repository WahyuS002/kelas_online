<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TingkatanKelas extends Model
{
    protected $table = 'tingkatan_kelas';

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
