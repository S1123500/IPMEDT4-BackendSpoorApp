<?php

namespace App\Http\Controllers;
use App\Models\Roomcode;
use Illuminate\Http\Request;

class RoomcodeController extends Controller
{
    public function show(){
        $roomcode = Roomcode::all();

        return $roomcode;
    }
}
