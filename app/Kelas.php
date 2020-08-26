<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['user_id', 'kategori_id', 'jenjang', 'level', 'nama_kelas', 'slug_kelas', 'thumbnail', 'deskripsi', 'harga', 'diskon', 'durasi_kelas', 'kapasitas_kelas', 'video_preview'];

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

    public function kategoriKelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'kategori_id');
    }
}
