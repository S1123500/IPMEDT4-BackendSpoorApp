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

    // public function store(Request $request, Locatie $locatie) {
    //     $locatie->name = $request->input["name"];
    //     $locatie->beschrijving = $request->input["beschrijving"];
    //     $locatie->coordinaten = $request->input["coordinaten"];
    
    //     $locatie->save();
    // }
    // public function store(Request $request) {
    //     $locatie = new Locatie;
    //     return $request->input;
    // }

    public function store(Request $request, Locatie $locatie) {
        $locatie->name = $request->input("name");
        // $locatie->beschrijving = $request->input("beschrijving");
        // $locatie->coordinaten = $request->input("coordinaten");
        $locatie->save();
    }

}

// toon: naam, beschrijving, foto, coordinaten
// aan te roepen api/locatie/{id}