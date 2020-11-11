<?php

namespace App\Http\Controllers;

use App\Actionnaire;
use App\Employee;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;


class RessourceHumaineControlleur extends Controller
{
   public function addActionnaire(Request $request){
       $actionnaire = new Actionnaire();
       $statement = DB::select("SHOW TABLE STATUS LIKE 'actionnaires'");
       $nextId = $statement[0]->Auto_increment;
       $year=date('Y');

       $actionnaire->code_actionnaire="act$nextId/$year";
       $actionnaire->nom=$request->act_nom;
       $actionnaire->adresse=$request->act_adresse;
       $actionnaire->mobile1=$request->act_mobile1;
       $actionnaire->pourcentage=$request->act_pourcentage;

       $actionnaire->save();
       return redirect("actionnaire/$nextId");
   }
   public function editActionnaire(Request $request,$id){
       $actionnaire = Actionnaire::find($id);

       $actionnaire->nom=$request->act_nom;
       $actionnaire->adresse=$request->act_adresse;
       $actionnaire->mobile1=$request->act_mobile1;
       $actionnaire->pourcentage=$request->pourcentage;

       $result=$actionnaire->save();
       $data=[
           'success'=>$result,
           'sucess_msg'=>'',
           'error_msg'=>''
       ];
       return $data;
   }
   public function getActionnaire ($id){
       $actionnaire = Actionnaire::find($id);

       $data=[
           'from'=>'actionnaire',
           'actionnaire'=>$actionnaire
       ];
       return view('profileActionnaire',$data);
   }
   public function getActionnaires(){
       $actionnaires=Actionnaire::all();

       $data =[
           'from_title'=>'الشركاء',
           'actionnaires'=>$actionnaires,
           'from'=>'actionnaire'
       ];
       return view('listing_rh',$data);
   }
   public function dellActionnaire($id){
       Actionnaire::destroy($id);
       return redirect('/actionnaires') ;
   }
//    ****************************************************************************************
    public function addEmployee(Request $request){
       $employee = new Employee();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'employees'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $employee->code_emp="emp$nextId/$year";
        $employee->nom=$request->emp_nom;
        $employee->adresse=$request->emp_adresse;
        $employee->ville=$request->emp_ville;
        $employee->mobile1=$request->emp_mobile1;
        $employee->mobile2=$request->emp_mobile2;
        $employee->salaire=$request->emp_salaire;
        $employee->date_paiement=$request->emp_date_paiement;

       $employee->save();
       return redirect("/employee/$nextId");
    }
    public function editEmployee(Request $request , $id){
       $employee = Employee::find($id);

        $employee->nom=$request->emp_nom;
        $employee->adresse=$request->emp_adresse;
        $employee->ville=$request->emp_ville;
        $employee->mobile1=$request->emp_mobile1;
        $employee->mobile2=$request->emp_mobile2;
        $employee->salaire=$request->emp_salaire;
        $employee->date_paiement=$request->emp_date_paiement;

       $result=$employee->save();
       $data=[
           'success'=>$result
       ];
       return $data;
    }
    public function getEmployee($id){
       $employee=Employee::find($id);

       $data=[
         'employee'=>$employee,
         'from'=>'employee',
       ];
       return view('profileEmployee',$data);
    }
    public function getEmployees(){
       $employees =  Employee::all();

       $data =[
          'from_title'=>'العمال',
          'employees'=>$employees,
           'from'=>'employee'
       ];
       return view('listing_rh',$data);
    }
    public function dellEmployee($id){
       Employee::destroy($id);
       return redirect('employees');
    }
    public function retraitEmployee(Request $request,$id){
       $employee=Employee::find($id);

       return route();
    }
    public function absenceEmployee($id){
       $employee=Employee::find($id);

       $employee->save();
    }



}
