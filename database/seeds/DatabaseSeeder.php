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
        $this->call(TingkatanSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(MapelSeeder::class);
    }
}
