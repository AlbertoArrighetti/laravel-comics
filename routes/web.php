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

    $comics = config('db.comics');

    $categories = config('db.categories');

    return view('home', compact('comics', 'categories'));

})->name('home');

Route::get('/comic', function(){
    return view('comic');
})->name('comic');