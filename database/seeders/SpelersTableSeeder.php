<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SpelersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spelers')->insert([
            "UUID" => 1,
            "rol" => 'Renner',
        ]);

        DB::table('spelers')->insert([
            "UUID" => 2,
            "rol" => 'Zoeker',
        ]);
    }
}
