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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    $json = config('data.json');
    $data = json_decode($json, true);
    return view('prodotti', compact('data'));
})->name('prodotti');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('prodotti/{id}', function($id) {
    $json = config('data.json');
    $data = json_decode($json, true);
    $item = $data[$id];
    dd($item);
    return view('prodotti', compact('id'));
})->name('prodotti.id');