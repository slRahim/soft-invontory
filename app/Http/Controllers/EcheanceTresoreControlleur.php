<?php

namespace App\Http\Controllers;

use App\Client;
use App\Echeance;
use App\Fournisseur;
use App\Http\Controllers\Controller as Controller;
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

        $echeance->montant=$request->echeance_montant;
        $echeance->date=$request->echeance_date;
        $echeance->nombre_jour=$request->echeance_nombre_jour;
        $echeance->observation=$request->echeance_observation;
        $echeance->etat=$request->echeance_etat;

        $result=$echeance->save();
        $data=[
            'success'=>$result,
            'success_msg'=>'لقد تم تعديل المعلومات بنجاح',
            'error_msg'=>'هناك خطأ,لم يتم تعديل المعلومات المطلوبة'
        ];
        return $data;
    }
    public function getEcheance($id){
        $echeance = Echeance::find($id);
        if ($echeance->client_id !== null){
            $user=$echeance->client;
        }else{
            $user=$echeance->fournisseur;
        }

        $data=[
            'from_title'=>'وعد دفع',
            'echeance'=>$echeance,
            'owner'=>$user
        ];
        return view('editEcheance',$data);
    }
    public function getEcheances(){
        $echeances=Echeance::where('etat','<>','regle')->orderBy('id','desc')->get();
        $clients=Client::all();
        $fournisseurs=Fournisseur::all();

        $data=[
            'from_title'=>'وعود الدفع',
            'echeances'=>$echeances,
            'clients'=>$clients,
            'fournisseurs'=>$fournisseurs,
        ];
        return view('listingEcheance',$data);
    }
    public function dellEcheance($id){
        Echeance::destroy($id);

        return route();
    }

}
