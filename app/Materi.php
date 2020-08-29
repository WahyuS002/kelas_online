<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = 'materi';

    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id');
    }
}
