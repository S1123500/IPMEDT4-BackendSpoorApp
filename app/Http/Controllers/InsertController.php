<?php
namespace App\Http\Controllers;
use \App\Models\FormInsert;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class InsertController extends Controller
{
    
    public function insert(){
        return view('form');
    }

    public function create(Request $request, \App\Models\Locatie $locatie){
        $locatie->name = $request->input('name');
        $locatie->coordinaten = $request->input('coordinaten');
		$locatie->beschrijving = $request->input('beschrijving');	
        $locatie->foto = $request->input('foto');
        $locatie->gehaald = $request->input('gehaald');

        // die($locatie);
        // return $locatie;
			
        try{
            $locatie->save();
            return redirect('/');
        }
		catch(Exception $e){
			return redirect('insert')->with('failed',"operation failed");
		}
    }
}

