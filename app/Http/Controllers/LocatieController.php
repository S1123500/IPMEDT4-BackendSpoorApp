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
}

// toon: naam, beschrijving, foto, coordinaten
// aan te roepen api/locatie/{id}