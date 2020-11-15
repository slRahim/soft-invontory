<?php

namespace App\Http\Controllers;

use App\Echeance;
use App\Http\Controllers\Controller;
use App\Tresore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;


class EcheanceTresoreControlleur extends Controller
{
    public function addEcheance(Request $request){
        $echeance = new Echeance();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'echeances'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $echeance->code_echeance="eche$nextId/$year";
        $echeance->montant=$request->echeance_montant;
        $echeance->date=$request->echeance_date;
        $echeance->nombre_jour=$request->echeance_nombre_jour;
        $echeance->observation=$request->echeance_observation;
        if ($request->echeance_from === 'client'){
            $echeance->client_id=$request->echeance_client_id;
        }else{
            $echeance->fournisseur_id=$request->echeance_fournisseur_id;
        }

        $result=$echeance->save();
        $data=[
            'success'=>$result,
            'success_msg'=>'لقد تم تعديل المعلومات بنجاح',
            'error_msg'=>'هناك خطأ,لم يتم تعديل المعلومات المطلوبة'
        ];
        return $data;
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


        return view('listingEcheance');
    }
    public function dellEcheance($id){
        Echeance::destroy($id);

        return route();
    }

}
