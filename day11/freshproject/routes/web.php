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
    return view('welcome');
});
Route::get('/welcome', function () {
    return "Hello Ashish";
});
Route::get('/arr', function () {
    return ['a' => 1];
});
Route::get('/req/{name}', function ($name) {
    $name = request('name');
    return $name;
   /// return view('text');
});
Route::get('/text', function () {
    $name = request('name');
    return view('text',['name' => $name ]);
   /// return view('text');
});



