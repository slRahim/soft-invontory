<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    protected $fillable = [
        'code_founisseur' , 'nom' , 'statut',
        'adresse', 'ville' , 'code_postale',
        'telephone1', 'telephone2','mobile1','mobile2',
        'email' ,
        'credit' , 'dernier_verssement', 'chifre_affaire'
    ];

    protected $hidden =[

    ];

    public function echeances (){
        return $this->hasMany('App\Echeance');
    }

    public function verssementFournisseurs (){
        return $this->hasMany('App\VerssementFournisseur');
    }

    public function factureFournisseurs (){
        return $this->hasMany('App\FactureFournisseur');
    }


}
