<?php

use Illuminate\Database\Seeder;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 12; $i++) {

            DB::table('tingkatan_kelas')->insert([
                'tingkatan' => 'Kelas ' . $i,
            ]);
        }
    }
}
