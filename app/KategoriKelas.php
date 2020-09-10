<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriKelas extends Model
{
    public $timestamps  = false;

    protected $fillable = ['kategori'];

    public function kelas()
    {
        return $this->hasMany(Kelas::class, 'kategori_id');
    }
}
