<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoomcodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomcodes')->insert([
            "roomcode" => '6969',
            "locatie-id" => '1',
        ]);
    }
}
