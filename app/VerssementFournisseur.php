<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementFournisseur extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'fournisseur_id','nom_fournissuer',
        'modalite' , 'montant' , 'objet' , 'terosore_id'
    ];

    protected $hidden =[

    ];
}
