<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use DateInterval;

class Materi extends Model
{
    use Sluggable;

    protected $table = 'materi';

    protected $fillable = ['user_id', 'kelas_id', 'judul', 'deskripsi', 'foto', 'video', 'pdf', 'urutan', 'status'];

    public function sluggable(): array
    {
        return [
            'slug_materi' => [
                'source' => 'judul'
            ]
        ];
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
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

    public function saveQuietly()
    {
        return static::withoutEvents(function () {
            return $this->save();
        });
    }

    public function duration($ytDuration)
    {

        $di = new DateInterval($ytDuration);
        $string = '';

        if ($di->h > 0) {
            $string .= $di->h . ':';
        }

        return $string . $di->i . ':' . $di->s;
    }

    public function getRouteKeyName()
    {
        return 'slug_materi';
    }

    public function progress($user_id, $slug_kelas, $id_materi)
    {
        $id_kelas = Kelas::where('slug_kelas', $slug_kelas)->first()->id;

        $id_peserta_kelas = PesertaKelas::where(['kelas_id' => $id_kelas, 'user_id' => $user_id])->first()->id;

        $progress = Progress::where(['id_peserta_kelas' => $id_peserta_kelas, 'id_kelas' => $id_kelas, 'id_materi' => $id_materi]);

        if ($progress->exists()) {
            if ($progress->first()->waktu_mengerti != null) {
                return true;
            }
            return false;
        }
        return false;
    }
}
