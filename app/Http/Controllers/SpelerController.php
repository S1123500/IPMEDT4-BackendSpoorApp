<?php

namespace App\Http\Controllers;

use App\Models\Speler;
use Illuminate\Http\Request;

class SpelerController extends Controller
{
    public function show($id){
        $speler = Speler::where('id','=', $id)->first();

        return $speler;
    }

    public function index(){
        $speler = Speler::all();

        return $speler;
    }
}
