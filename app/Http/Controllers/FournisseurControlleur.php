<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fournisseur ;
use Illuminate\Support\Facades\DB as DB;


class FournisseurControlleur extends Controller
{

    public function addFournisseur(Request $request){
        $fournisseur=new Fournisseur();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'fournisseurs'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $fournisseur->code_fournisseur="four$nextId/$year";
        $fournisseur->nom=$request->fournisseur_nom;
        $fournisseur->adresse=$request->fournisseur_adresse;
        $fournisseur->ville=$request->fournisseur_ville;
        $fournisseur->mobile1=$request->fournisseur_mobile1;
        $fournisseur->mobile2=$request->fournisseur_mobile2;
        $fournisseur->email=$request->fournisseur_email;
        $fournisseur->code_postale=$request->fournisseur_code_postale;

        $fournisseur->save();
        return redirect("/fournisseur/$nextId");
    }
    public function editFournisseur(Request $request , $id){
        $fournisseur=Fournisseur::find($id);

        $fournisseur->nom=$request->fournisseur_nom;
        $fournisseur->adresse=$request->fournisseur_adresse;
        $fournisseur->ville=$request->fournisseur_ville;
        $fournisseur->mobile1=$request->fournisseur_mobile1;
        $fournisseur->mobile2=$request->fournisseur_mobile2;
        $fournisseur->email=$request->fournisseur_email;
        $fournisseur->code_postale=$request->fournisseur_code_postale;

        $result=$fournisseur->save();
        $data=[
          'success'=>$result,

        ];
        return $data;
    }
    public function getFournisseur($id){
        $fournisseur=Fournisseur::find($id);
        $echeances=Client::find($id)->echeances()->where('etat', 1)->get();

        $data=[
            'from'=>'fournisseur',
            'fournisseur'=>$fournisseur,
            'echeances'=>$echeances,
        ];
        return view('profileFournisseur',$data);
    }
    public function getFournisseurs(){
        $fournisseurs=Fournisseur::all();

        $data=[
          'from_title'=>'الموردين',
          'from'=>'fournisseur',
          'fournisseurs'=>$fournisseurs
        ];
        return view('listing_rh',$data);
    }
    public function dellFournisseur($id){
        Fournisseur::destroy($id);
        return redirect('/fournisseurs');
    }

}
