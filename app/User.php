<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prov_id', 'kota_id', 'kec_id', 'kel_id', 'email', 'name', 'password', 'pendidikan_terakhir',
        'jk', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'bio', 'guru', 'siswa', 'no_hp', 'foto', 'fb',
        'twitter', 'ig', 'yt', 'linkedin', 'nik', 'npwp', 'status', 'kode_promosi', 'kode_affiliasi', 'last_login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
