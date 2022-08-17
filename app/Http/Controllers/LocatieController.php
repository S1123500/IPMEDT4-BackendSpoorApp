<?php

namespace App\Http\Controllers;

use App\Models\Locatie;
use Illuminate\Http\Request;

class LocatieController extends Controller
{
    public function show($id){
        $locatie = Locatie::where('id','=', $id)->first();

        return $locatie;
    }

    public function index(){
        $locatie = Locatie::all();

        return $locatie;
    }

    public function store(Request $request, Locatie $locatie){
        $locatie->name = $request->input('name');
        $locatie->coordinaten = $request->input('coordinaten');
		$locatie->beschrijving = $request->input('beschrijving');	
        

        // die($locatie);
        // return $locatie;
			
        try{
            $locatie->save();
        }
		catch(Exception $e){
			return redirect('insert')->with('failed',"operation failed");
		}
    }
}

// toon: naam, beschrijving, foto, coordinaten
// aan te roepen api/locatie/{id}