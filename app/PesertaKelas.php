<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nagy\LaravelRating\Traits\Rate\CanRate;

class PesertaKelas extends Model
{
    use CanRate;

    protected $table = 'peserta_kelas';

    protected $fillable = [
        'kelas_id', 'user_id', 'waktu_mulai', 'waktu_selesai', 'jumlah_materi_selesai', 'jumlah_materi',
        'bukti_pembayaran', 'harga_bayar', 'pembuat_kelas', 'status',
    ];
}
