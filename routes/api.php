<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/locaties','App\Http\Controllers\LocatieController@store');

Route::get('/locaties','\App\Http\Controllers\LocatieController@index');
Route::get('/spelers','\App\Http\Controllers\SpelerController@index');

// individuele route show
Route::get('/locatie/{id}','\App\Http\Controllers\LocatieController@show');
Route::get('/speler/{name}','\App\Http\Controllers\SpelerController@show');

//create
Route::get('/', function () {
    return view('form');
});

Route::get('/insert','App\Http\Controllers\InsertController@insert');
Route::post('/create','App\Http\Controllers\InsertController@create');

Route::get('image/{filename}','App\Http\Controllers\PhotoController@image');

Route::get('/roomcode','App\Http\Controllers\RoomcodeController@show');