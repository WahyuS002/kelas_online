<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Auth;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Kelas extends Model implements HasMedia
{
    use Sluggable, InteractsWithMedia;

    public function sluggable(): array
    {
        return [
            'slug_kelas' => [
                'source' => 'nama_kelas'
            ]
        ];
    }

    protected $table = 'kelas';

    protected $fillable = ['user_id', 'kategori_id', 'jenjang', 'level', 'nama_kelas', 'slug_kelas', 'thumbnail', 'deskripsi', 'harga', 'diskon', 'durasi_kelas', 'kapasitas_kelas', 'video_preview', 'status'];

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

    public function users()
    {
        return $this->belongsToMany(User::class, 'peserta_kelas', 'kelas_id', 'user_id')->withPivot('harga_bayar', 'status', 'id', 'bukti_pembayaran', 'waktu_mulai', 'waktu_selesai');
    }

    public function pesertaKelas($slug_kelas)
    {
        $kelas = Kelas::where('slug_kelas', $slug_kelas)->first();

        if (Auth::check()) {
            $user_id = auth()->user()->id;
            return PesertaKelas::where(['kelas_id' => $kelas->id, 'user_id' => $user_id])->first();
        } else {
            return null;
        }
    }

    public function pesertaCheckout($id)
    {
        $kelas_id = $id;
        $user_id = auth()->user()->id;

        $peserta = PesertaKelas::where(['user_id' => $user_id, 'kelas_id' => $kelas_id])->first();

        if ($peserta) {
            return true;
        } else {
            return false;
        }
    }

    public function countModul($kelas_id)
    {
        $count = Materi::where('kelas_id', $kelas_id)->count();
        return $count;
    }
}
