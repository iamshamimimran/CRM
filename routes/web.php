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
    return view('welcome');
});





























































Route::get('/customerDetails', function () {
    return view('customerDetails');
});




Route::get('/emailconfi', function () {
    return view('emailconfi');
});


<<<<<<< HEAD
Route::get('/user', function () {
    return view('user');
=======
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/setting', function () {
    return view('setting');
});
Route::get('/file', function () {
    return view('file');
>>>>>>> 76c4daa256d4750e770527d6ad6f12901a7e21ca
});





