<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = [
        'code_founisseur' , 'nom' , 'statut',
        'adresse', 'ville' , 'code_postale',
        'telephone1', 'telephone2','mobile1','mobile2',
        'email' , 'echeance_id' ,
        'credit' , 'dernier_verssement', 'chifreAffaire'
    ];

    protected $hidden =[

    ];
}
