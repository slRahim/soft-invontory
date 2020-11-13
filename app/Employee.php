<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'id','code_emp' , 'nom' , 'adresse' , 'ville',
        'mobile1', 'mobile2' , 'email' , 'nombre_absence',
        'salaire' , 'dernier_acompte' , 'solde' , 'date_paiement','statut'
    ];

    protected $hidden =[

    ];

    public function acompteEmps (){
        return $this->hasMany('App\AcompteEmp','emp_id');
    }
}
