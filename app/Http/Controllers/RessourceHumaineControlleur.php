<?php

namespace App\Http\Controllers;

use App\AcompteEmp;
use App\Actionnaire;
use App\Employee;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as DB;


class RessourceHumaineControlleur extends Controller{

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
       $actionnaire->pourcentage=$request->act_pourcentage;

       $result=$actionnaire->save();

       $pourcentage_g=Actionnaire::sum('pourcentage');

       if ($pourcentage_g > 100){
           $data=[
               'success'=>$result,
               'success_msg'=>'تم التعديل المعلومات بنجاح',
               'error_msg'=>'هناك خطأ,لم يتم تعديل المعلومات',
               'pourcentage_g'=>$pourcentage_g
           ];
           return $data ;
       }

       $data=[
           'success'=>$result,
           'success_msg'=>'تم التعديل المعلومات بنجاح',
           'error_msg'=>'هناك خطأ,لم يتم تعديل المعلومات',
           'pourcentage_g'=>$pourcentage_g
       ];
       return $data;
   }
   public function getActionnaire ($id){
       $actionnaire = Actionnaire::find($id);
       $pourcentage_g=Actionnaire::sum('pourcentage');

       $data=[
           'from'=>'actionnaire',
           'actionnaire'=>$actionnaire,
           'pourcentage_g'=>$pourcentage_g,
       ];
       return view('profileActionnaire',$data);
   }
   public function getActionnaires(){
       $actionnaires=Actionnaire::all();
       $pourcentage_g=Actionnaire::sum('pourcentage');

       $data =[
           'from_title'=>'الشركاء',
           'actionnaires'=>$actionnaires,
           'from'=>'actionnaire',
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
        $employee->solde=$request->emp_salaire;
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
        $employee->email=$request->emp_email;
        $employee->salaire=$request->emp_salaire;
        $employee->date_paiement=$request->emp_date_paiement;

       $result=$employee->save();
       $data=[
           'success'=>$result,
           'success_msg'=>'لقد تم تعديل المعلومات بنجاح',
           'error_msg'=>'هناك خطأ,لم يتم تعديل المعلومات المطلوبة'
       ];
       return $data;
    }
    public function getEmployee($id){
       $employee=Employee::find($id);
       $acomptes=Employee::find($id)->acompteEmps;

       if (date('d',strtotime($employee->date_paiement) ) === date("d")){
           if ($employee->statut === 0){
               $this->startMounth($employee);
               $employee=Employee::find($id);
           }
       }else{
           $employee->statut = 0;
       }

       $data=[
         'employee'=>$employee,
          'acomptes'=>$acomptes,
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
    public function startMounth($emp){
        $emp->nombre_absence=0;
        $emp->solde=$emp->solde + $emp->salaire;
        $emp->statut=1 ;
        return $emp->save();
    }
    public function retraitEmployee(Request $request,$id){
        $employee=Employee::find($id);
        $acompte=new AcompteEmp();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'acompte_emps'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $acompte->code_acompte="Aco$nextId/$year";
        $acompte->date=$request->acompte_date;
        $acompte->montant=$request->acompte_montant;
        $acompte->objet=$request->acompte_objet;
        $acompte->modalite="espece";
        $acompte->emp_id=$id;

        $result=$acompte->save();
        if ($result){
            $employee->dernier_acompte=$request->acompte_montant;
            $employee->solde= $employee->solde - $request->acompte_montant ;
        }
        $result = $employee->save();

        $data=[
            'success'=>$result,
            'success_msg'=>'لقد تم تنفيد العملية بنجاح',
            'error_msg'=>'هناك خطأ,لم يتم تنفيد العملية'
        ];
        return $data;
    }
    public function absenceEmployee($id){
       $employee=Employee::find($id);
       $employee->nombre_absence=$employee->nombre_absence+1;

       $result=$employee->save();
        $data=[
            'success'=>$result,
            'success_msg'=>'لقد تم تنفيد العملية بنجاح',
            'error_msg'=>'هناك خطأ,لم يتم تنفيد العملية'
        ];
        return $data;
    }
    public function zeroAbsenceEmployee($id){
        $employee=Employee::find($id);
        $employee->nombre_absence=0;

        $result=$employee->save();
        $data=[
            'success'=>$result,
            'success_msg'=>'لقد تم تنفيد العملية بنجاح',
            'error_msg'=>'هناك خطأ,لم يتم تنفيد العملية'
        ];
        return $data;
    }




}
