<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockArticleFamilleControlleur as stockControlleur;

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
Route::get('client/{id}','ClientControlleur@getClient');
Route::post('client','ClientControlleur@addClient');

Route::get('fournisseurs', 'FournisseurControlleur@getFournisseurs');
Route::get('fournisseur/{id}', 'FournisseurControlleur@getFournisseur');
Route::post('fournisseur', 'FournisseurControlleur@addFournisseur');

Route::get('actionnaires', 'RessourceHumaineControlleur@getActionnaires');
Route::post('actionnaire', 'RessourceHumaineControlleur@addActionnaire');
Route::get('actionnaire/{id}', 'RessourceHumaineControlleur@getActionnaire');

Route::get('employees', 'RessourceHumaineControlleur@getEmployees');
Route::post('employee', 'RessourceHumaineControlleur@addEmployee');
Route::get('employee/{id}', 'RessourceHumaineControlleur@getEmployee');

Route::get('article/add',function (){

    return view('addArticle');
});
Route::get('articles','StockArticleFamilleControlleur@getArticles');