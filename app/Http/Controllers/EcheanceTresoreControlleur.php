<?php

namespace App\Http\Controllers;

use App\Echeance;
use App\Http\Controllers\Controller;
use App\Tresore;
use Illuminate\Http\Request;


class EcheanceTresoreControlleur extends Controller
{
    public function addEcheance(Request $request){
        $echeance = new Echeance();

        $echeance->save();
        return route();
    }
    public function editEcheance(Request $request , $id){
        $echeance =  Echeance::find($id);

        $echeance->save();
        return route();
    }
    public function getEcheance($id){
        $echeance = Echeance::find($id);

        return route();
    }
    public function getEcheances(){
        $echeances=Echeance::all();

        return route();
    }
    public function dellEcheance($id){
        Echeance::destroy($id);

        return route();
    }
//    ****************************************************************************************
    public function addTresore (Request $request){
        $tresore = new Tresore();

        $tresore->save();
        return route();
    }
    public function editTresore(Request $request , $id){
        $tresore=Tresore::find($id);

        $tresore->save();
        return route();
    }
    public function getTresore($id){
        $tresore = Tresore::find($id);

        return route();
    }
    public function getTresores(){
        $tresores = Tresore::all();

        return route();
    }
    public function dellTresore($id){
        Tresore::destroy($id);

        return route();
    }
    public function verssementTresore(Request $request , $id){
        $tresore = Tresore::find($id);

        return route();
    }
    public function retraitTresore(Request $request , $id){
        $tresore=Tresore::find($id);

        return route();
    }
    public function zeroTresore($id){
        $tresore=Tresore::find($id);

        return route();
    }
}
