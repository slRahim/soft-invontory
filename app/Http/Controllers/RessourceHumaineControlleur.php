<?php

namespace App\Http\Controllers;

use App\Actionnaire;
use App\Employee;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;


class RessourceHumaineControlleur extends Controller
{
   public function addActionnaire(Request $request){
//       $actionnaire = new Actionnaire();
//
//       $actionnaire->save();
       return route('actionnaires');
   }
   public function editActionnaire(Request $request,$id){
       $actionnaire = Actionnaire::find($id);

       $actionnaire->save();
       return route();
   }
   public function getActionnaire ($id){
       $actionnaire = Actionnaire::find($id);

       return route();
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

       return route() ;
   }
//    ****************************************************************************************
    public function addEmployee(Request $request){
//       $employee = new Employee();
//
//       $employee->save();
       return route('employees');
    }
    public function editEmployee(Request $request , $id){
       $employee = Employee::find($id);

       $employee->save();
       return route();
    }
    public function getEmployee($id){
       $employee=Employee::find($id);


       return view('profileEmployee');
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

       return route();
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
