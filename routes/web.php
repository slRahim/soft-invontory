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
Route::get('clients','ClientControlleur@getClients');
Route::get('fournisseurs', 'FournisseurControlleur@getFournisseurs');
Route::get('actionnaires', 'RessourceHumaineControlleur@getActionnaires');
Route::get('employees', 'RessourceHumaineControlleur@getEmployees');
Route::get('employee/{id}', 'RessourceHumaineControlleur@getEmployee');