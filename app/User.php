<?php

namespace App;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
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

    public function provinsi()
    {
        return $this->belongsTo(Province::class, 'prov_id');
    }

    public function kota()
    {
        return $this->belongsTo(Regency::class, 'kota_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(District::class, 'kec_id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Village::class, 'kel_id');
    }
}
