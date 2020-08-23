<?php

use Illuminate\Database\Seeder;
use PhpParser\ErrorHandler\Collecting;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = collect(['Beginner', 'Intermediate', 'Advanced']);

        $level->each(function ($l) {
            \App\LevelKelas::insert([
                'level' => $l
            ]);
        });
    }
}
