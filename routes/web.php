<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Con la rotta / carica il file home
Route::get('/', function () {

    $data = config("store");


    return view('home', $data);
});

// Con la rotta /home carica comunque il file home
Route::get('/home', function () {

    $data = config("store");

    return view('home', $data);
});

// Con la rotta /about carica il file home
Route::get('/about', function () {

    $data = [
        "nome" => "Pippo",
        "cognome" => "Baudo",
        "typeMail" => [
            "libero.it",
            "gmail.com",
            "hotmail.it",
        ]
    ];


    return view('about', $data);
});
