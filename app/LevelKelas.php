<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelKelas extends Model
{
    protected $table = 'level_kelas';

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
