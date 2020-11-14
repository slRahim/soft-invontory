<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementFournisseur extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'fournisseur_id',
        'modalite' , 'montant' , 'objet' , 'facture_id',
    ];

    protected $hidden =[

    ];


    public function fournisseur(){
        return $this->belongsTo('App\Fournisseur');
    }

    public function factureFournisseur (){
        return $this->belongsTo('App\FactureClient');
    }
}
