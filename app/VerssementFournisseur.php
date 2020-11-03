<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementFournisseur extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'fournisseur_id',
        'modalite' , 'montant' , 'objet' , 'terosore_id'
    ];

    protected $hidden =[

    ];

    public function teresore(){
        return $this->belongsTo('App\Tresore');
    }

    public function fournisseur(){
        return $this->belongsTo('App\Fournisseur');
    }
}
