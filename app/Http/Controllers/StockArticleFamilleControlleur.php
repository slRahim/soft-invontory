<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Http\Request;
use App\Stock ;
use App\Famille;
use App\Article;


class StockArticleFamilleControlleur extends Controller
{
    public function addStock (Request $request){
        $stock = new Stock();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'stocks'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');
        $stock->code_stock="stk$nextId/$year";
        $stock->adresse=$request->stock_adresse;
        $stock->save();
        return redirect('/familles');
    }
    public function dellStock($id){
        Stock::destroy($id);
        return redirect('/familles');
    }
//    ************************************************************************************
    public function addFamille(Request $request){
        $famille = new Famille();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'familles'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');
        $famille->code_famille="fam$nextId/$year";
        $famille->libelle=$request->famille_libelle;
        $famille->pourcentage_marge1=$request->famille_marge1;
        $famille->pourcentage_marge2=$request->famille_marge2;
        $famille->save();
        return redirect('/familles');
    }
    public function getFamillesStocks(){
        $familles=Famille::all();
        $stocks=Stock::all();

        $data=[
            'from_title'=>'الفئات و المخازن',
            'from'=>'stock famille',
            'familles'=>$familles,
            'stocks'=>$stocks
        ];
        return view('familleStock',$data);
    }
    public function dellFamille($id){
        Famille::destroy($id);
        return redirect('/familles');
    }
//    *************************************************************************************
    public function addArticle(Request $request){
        $article =new Article();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'articles'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $article->code_article="prod$nextId/$year";
        $article->code_bare=$request->art_code_bare;
        $article->referance=$request->art_referance;
        $article->designation=$request->art_designation;
        $article->colis=$request->art_colis;
        $article->qte_disponible=$request->art_qte;
        $article->qte_minimale=$request->art_qte_min;
        $article->famille_id=$request->art_famille;
        $article->stock_id=$request->art_stock;
        $article->prix_achat=$request->art_prix_achat;
        $article->prix_vente_min=$request->art_prix_vente_min;
        $article->marge_min=$request->art_marge_min;
        $article->pourcentage_marge_min=$request->art_pourcentage_marge_min;
        $article->prix_vente1=$request->art_prix_vente1;
        $article->marge1=$request->art_marge1;
        $article->pourcentage_marge1=$request->art_pourcentage_marge1;
        $article->prix_vente2=$request->art_prix_vente2;
        $article->marge2=$request->art_marge2;
        $article->pourcentage_marge_min=$request->art_pourcentage_marge_min;

        $result=$article->save();
        $data=[
            'success'=>$result,
            'articles'=>$article,
            'success_msg'=>'لقد تم إضافة المنتج بنجاح',
            'error_msg'=>'هناك خطأ.لم يتم إضافة المنتج',
        ];
        return $data;
    }
    public function editArticle(Request $request,$id){
        $article= Article::find($id);

        $article->save();
        return view();
    }
    public function getArticle($id){
        $article = Article::find($id);
        $articles_fam =Article::all()->get(5);
        $data=[
            'from_title'=>'تعديل منتج',
            'from'=>'edit article',
            'article'=>$article,
            'articles_fam'=>$articles_fam
        ];
        return view('editArticle',$data);
    }
    public function getArticles(){
        $articles= Article::all();

        $data=[
            'from_title'=>'قائمة المنتجات',
            'from'=>'article',
            'articles'=>$articles

        ];
        return view('listingArticle',$data);
    }
    public function dellArticle($id){
        Article::destroy($id);

        return route();
    }
}
