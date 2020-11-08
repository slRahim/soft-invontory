<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fournisseur ;


class FournisseurControlleur extends Controller
{

    public function addFournisseur(Request $request){
        $fournisseur=new Fournisseur();

        $fournisseur->save();
        return route();
    }
    public function editFournisseur(Request $request , $id){
        $fournisseur=Fournisseur::find($id);

        $fournisseur->save();
        return route();
    }
    public function getFournisseur($id){
        $fournisseur=Fournisseur::find($id);

        return route();
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

        return route();
    }

}
