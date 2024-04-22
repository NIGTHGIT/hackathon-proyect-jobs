<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datos = Http::get("http://country.io/names.json");
    $datos_decode =  json_decode($datos, true);
    sort($datos_decode);
    return view('welcome', compact('datos_decode'));
});
