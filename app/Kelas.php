<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['tingkatan_kelas_id', 'mapel_id', 'level_kelas_id', 'user_id', 'nama_kelas', 'gambar', 'deskripsi', 'harga'];

    public function levelKelas()
    {
        return $this->belongsTo(LevelKelas::class, 'level_kelas_id');
    }

    public function mapelKelas()
    {
        return $this->belongsTo(Mapel::class, 'mapel_kelas_id');
    }

    public function tingkatanKelas()
    {
        return $this->belongsTo(TingkatanKelas::class, 'tingkatan_kelas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
