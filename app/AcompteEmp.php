<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcompteEmp extends Model
{
    protected $fillable = [
        'code_acompte' , 'date' , 'emp_id','nom_emp',
        'modalite' , 'montant' , 'objet' , 'terosore_id'
    ];

    protected $hidden =[

    ];
}
