<?php

use Illuminate\Support\Facades\Route;

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
    $lugar='investigaciones 1,2';
    return view('vista1',['lugar'=>$lugar]);
});

Route::get('/conocimiento', function () {
    $lugar='investigaciones 3,4';
    return view('vista2',['lugar'=>$lugar]);
});
Route::get('/redes sociales', function () {
    $lugar='investigaciones 5,6';
    return view('vista3',['lugar'=>$lugar]);
});
