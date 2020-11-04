<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tresore extends Model
{
    protected $fillable = [
        'code_caisse' ,'solde_init', 'solde' , 'montant_sortie'
        , 'montant_entre',
    ];

    protected $hidden =[

    ];

    public function verssementClients (){
        return $this->hasMany('App\VerssementClient');
    }

    public function verssementFournisseurs (){
        return $this->hasMany('App\VerssementFournisseur');
    }

    public function acompteEmps (){
        return $this->hasMany('App\AcompteEmp');
    }
}
