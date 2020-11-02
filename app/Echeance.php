<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Echeance extends Model
{
    protected $fillable = [
        'code_echeance' , 'montant' , 'nombre_jours',
        'date','observation' ,'etat' , 'client_id' , 'fournisseur_id',

    ];

    protected $hidden =[

    ];
}
