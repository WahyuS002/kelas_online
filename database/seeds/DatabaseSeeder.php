<?php

use App\TingkatanKelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KategoriKelasSeeder::class);
        $this->call(IndoRegionSeeder::class);
    }
}
