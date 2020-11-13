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
Route::get('client/{id}','ClientControlleur@getClient');
Route::post('client','ClientControlleur@addClient');
Route::get('client/dell/{id}','ClientControlleur@dellClient');

Route::get('fournisseurs', 'FournisseurControlleur@getFournisseurs');
Route::get('fournisseur/{id}', 'FournisseurControlleur@getFournisseur');
Route::post('fournisseur', 'FournisseurControlleur@addFournisseur');
Route::get('fournisseur/dell/{id}', 'FournisseurControlleur@dellFournisseur');

Route::get('actionnaires', 'RessourceHumaineControlleur@getActionnaires');
Route::post('actionnaire', 'RessourceHumaineControlleur@addActionnaire');
Route::get('actionnaire/{id}', 'RessourceHumaineControlleur@getActionnaire');
Route::post('actionnaire/{id}', 'RessourceHumaineControlleur@editActionnaire');
Route::get('actionnaire/dell/{id}', 'RessourceHumaineControlleur@dellActionnaire');

Route::get('employees', 'RessourceHumaineControlleur@getEmployees');
Route::post('employee', 'RessourceHumaineControlleur@addEmployee');
Route::get('employee/{id}', 'RessourceHumaineControlleur@getEmployee');
Route::post('employee/{id}', 'RessourceHumaineControlleur@editEmployee');
Route::get('employee/dell/{id}', 'RessourceHumaineControlleur@dellEmployee');
Route::post('acompte/{id}','RessourceHumaineControlleur@retraitEmployee');
Route::get('absence/add/{id}','RessourceHumaineControlleur@absenceEmployee');
Route::get('absence/zero/{id}','RessourceHumaineControlleur@zeroAbsenceEmployee');

Route::get('article/add',function (){
    $data=[
        'familles'=>\App\Famille::all(),
        'stocks'=>\App\Stock::all(),
    ];
    return view('addArticle',$data);
});
Route::post('article','StockArticleFamilleControlleur@addArticle');
Route::get('articles','StockArticleFamilleControlleur@getArticles');
Route::get('article/{id}','StockArticleFamilleControlleur@getArticle');
Route::post('article/{id}','StockArticleFamilleControlleur@editArticle');
Route::get('article/dell/{id}','StockArticleFamilleControlleur@dellArticle');

Route::get('familles','StockArticleFamilleControlleur@getFamillesStocks');
Route::post('famille','StockArticleFamilleControlleur@addFamille');
Route::get('famille/dell/{id}','StockArticleFamilleControlleur@dellFamille');

Route::post('stock','StockArticleFamilleControlleur@addStock');
Route::get('stock/dell/{id}','StockArticleFamilleControlleur@dellStock');