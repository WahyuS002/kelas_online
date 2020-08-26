<?php

use Illuminate\Database\Seeder;

class KategoriKelasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = collect([
            'Keuangan dan Akuntansi', 'Pengembangan', 'Bisnis', 'TI dan Perangkat Lunak',
            'Produktivitas Kantor', 'Pengembangan Pribadi', 'Desain', 'Pemasaran', 'Gaya Hidup',
            'Fotografi', 'Kesehatan dan Kebugaran', 'Musik', 'Pengajaran dan Akademis', 'Saya belum tahu'
        ]);

        $kategori->each(function ($k) {
            \App\KategoriKelas::insert([
                'kategori' => $k
            ]);
        });
    }
}
