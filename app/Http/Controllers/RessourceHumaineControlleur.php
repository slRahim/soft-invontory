<?php

namespace App\Http\Controllers;

use App\Actionnaire;
use App\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RessourceHumaineControlleur extends Controller
{
   public function addActionnaire(Request $request){
       $actionnaire = new Actionnaire();

       $actionnaire->save();
       return route();
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

       return route();
   }
   public function dellActionnaire($id){
       Actionnaire::destroy($id);

       return route() ;
   }
//    ****************************************************************************************
    public function addEmployee(Request $request){
       $employee = new Employee();

       $employee->save();
       return route();
    }
    public function editEmployee(Request $request , $id){
       $employee = Employee::find($id);

       $employee->save();
       return route();
    }
    public function getEmployee($id){
       $employee=Employee::find($id);

       return route();
    }
    public function getEmployees(){
       $employees =  Employee::all();

       return route();
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
