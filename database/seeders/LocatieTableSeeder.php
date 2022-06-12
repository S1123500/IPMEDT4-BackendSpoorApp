<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocatieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    // $table->boolean('gehaald')->default(0);

    public function run()
    {
        DB::table('locatie')->insert([
            "name" => 'Happy Days',
            "coordinaten" => '1',
            "beschrijving" => 'happy days den haag, willem de zwijgerlaan',
            "foto"=> '/img/happy days.jpg',
        ]);
        
        DB::table('locatie')->insert([
            "name" => 'Dranklokaal 1650',
            "coordinaten" => '2',
            "beschrijving" => 'hoofdkantoor syntax, dranklokaal',
            "foto"=> '/img/dranklokaal1650.jpg',
        ]);
    
    }
}
