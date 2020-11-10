<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementFournisseur extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'fournisseur_id',
        'modalite' , 'montant' , 'objet' ,
    ];

    protected $hidden =[

    ];


    public function fournisseur(){
        return $this->belongsTo('App\Fournisseur');
    }
}
