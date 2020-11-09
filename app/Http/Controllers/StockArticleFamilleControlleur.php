<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Stock ;
use App\Famille;
use App\Article;


class StockArticleFamilleControlleur extends Controller
{
    public function addStock (Request $request){
        $stock = new Stock();


        $stock->save();
        return route();
    }
    public function getStocks (){
        $stocks = Stock::all();

        return route();
    }
    public function dellStock($id){
        Stock::destroy($id);

        return route();
    }
//    ************************************************************************************
    public function addFamille(Request $request){
        $famille = new Famille();

        $famille->save();
        return route();
    }
    public function getFamilles(){
        $familles=Famille::all();

        return route();
    }
    public function dellFamille($id){
        Famille::destroy($id);

        return route();
    }
//    *************************************************************************************
    public function addArticle(Request $request){
        $article =new Article();

        $article->save();
        return route();
    }
    public function editArticle(Request $request,$id){
        $article= Article::find($id);

        $article->save();
        return route();
    }
    public function getArticle($id){
        $article = Article::find($id);

        return route();
    }
    public function getArticles(){
        $articles= Article::all();

        return view('listingArticle');
    }
    public function dellArticle($id){
        Article::destroy($id);

        return route();
    }
}
