<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use \App\Models\Locatie;

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
        
        Locatie::create([
            "name" => 'Dranklokaal 1650',
            "coordinaten" => [52.158307646738685, 4.488973611814642],
            "beschrijving" => 'hoofdkantoor syntax, dranklokaal:',
            
        ]);

        Locatie::create([
            "name" => 'Lazarus',
            "coordinaten" => [52.16376252522057, 4.485961198480929],
            "beschrijving" => 'Rock Cafe, bespeel hier een muziekinstrument',
        ]);

        Locatie::create([
            "name" => 'Cafe de Keyzer',
            "coordinaten" => [52.156074843175844, 4.486179982979343],
            "beschrijving" => 'Lievelingsbar van muziekgezelschap Sempre Crescendo.',
        ]);
        
        Locatie::create([
            "name" => 'De Vergulde Kruik',
            "coordinaten" => [52.1617434418649, 4.486421013661588],
            "beschrijving" => 'Makkelijk te bereiken, met een grote bar.',
        ]);
        


    }
}
