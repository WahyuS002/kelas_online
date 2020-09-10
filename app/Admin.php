<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable, HasRoles;

    protected $guard = 'admin';

    protected $fillable = [
        'name', 'email', 'password', 'role', 'kategori_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function kategori_kelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'kategori_id');
    }
}
