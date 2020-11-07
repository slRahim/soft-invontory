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
    return view('login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('clients', function () {
    return view('listing_rh',['from'=>'clients']);
});
Route::get('fournisseurs', function () {
    return view('listing_rh',['from'=>'fournissuer']);
});
Route::get('actionnaires', function () {
    return view('listing_rh',['from'=>'actionnaires']);
});
Route::get('employees', function () {
    return view('listing_rh',['from'=>'employees']);
});