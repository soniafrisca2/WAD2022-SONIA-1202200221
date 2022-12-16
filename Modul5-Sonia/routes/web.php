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

Route::get('/Register', function () {
    return view('Register');
});

Route::get('/Login', function () {
    return view('Login.blade.php');
});

Route::get('/homeutama', function () {
    return view('homeutama');
});

Route::get('/ListCar', function () {
    return view('ListCar');
});

Route::get('/Add', function () {
    return view('Add');
});

Route::get('/Detail', function () {
    return view('Detail');
});

Route::get('/Edit', function () {
    return view('Edit');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Profile', function () {
    return view('Profile');
});

