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

Route::get('/', function () {
    $helloWorld = 'Hello, World!';
    return view('home', [
        'helloWorld' => $helloWorld
    ]);
});

Route::get('/bonus', function () {
    $bonus = 'Hello, Bonus!';
    return view('bonus', [
        'bonus' => $bonus
    ]);
});

