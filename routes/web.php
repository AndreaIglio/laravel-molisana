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

// HOME
Route::get('/', function () {
    return view('home');
})->name('home');
//assegnato un name home alla route


// PRODUCTS
Route::get('products', function () {

    // dd(json_decode(config('dati.pasta'), true));

    $pasta_list = json_decode(config('dati.pasta'), true);

    // var_dump($pasta_list);

    return view('products', compact('pasta_list'));
    })->name('products');
Route::get('products/{id}', function($id){

    $product = $data[$id];
    return "Hai cliccato sulla pasta con id: $id";

});

// CONTACTS
Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');