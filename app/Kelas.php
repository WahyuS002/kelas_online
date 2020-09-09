<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = ['user_id', 'kategori_id', 'jenjang', 'level', 'nama_kelas', 'slug_kelas', 'thumbnail', 'deskripsi', 'harga', 'diskon', 'durasi_kelas', 'kapasitas_kelas', 'video_preview'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategoriKelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'kategori_id');
    }

    public function materi()
    {
        return $this->hasMany(Materi::class, 'kelas_id');
    }

    public function YoutubeID($url)
    {
        if (strlen($url) > 11) {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
                return $match[1];
            } else
                return false;
        }

        return $url;
    }

    public function getRouteKeyName()
    {
        return 'slug_kelas';
    }
}
