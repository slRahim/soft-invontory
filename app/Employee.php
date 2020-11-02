<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'code_emp' , 'nom' , 'adresse' , 'ville',
        'mobile1', 'mobile2' , 'email' ,
        'salaire' , 'dernier_acompte' , 'solde' , 'date_paiement'
    ];

    protected $hidden =[

    ];
}
