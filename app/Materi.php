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
}
