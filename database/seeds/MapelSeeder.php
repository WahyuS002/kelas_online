<?php

use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel = collect(['Bahasa Indonesia', 'Matematika', 'Bahasa Inggris', 'PKN']);

        $mapel->each(function ($m) {
            \App\Mapel::insert([
                'mapel' => $m
            ]);
        });
    }
}
