<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('welcome');
});

Route::get('/tes1', function () {
    return Inertia::render('Tes', [
        'header' => 'halaman 1'
    ]);
});

Route::get('/tes2', function () {
    return Inertia::render('Tes', [
        'header' => 'halaman 2'
    ]);
});

Route::get('/tes3', function () {
    return Inertia::render('Tes', [
        'header' => 'halaman 3'
    ]);
});