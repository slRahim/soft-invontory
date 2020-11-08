<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id','code_client' , 'nom' , 'statut',
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

    public function verssementClients (){
        return $this->hasMany('App\VerssementClient');
    }

    public function factureClients (){
        return $this->hasMany('App\FactureClient');
    }


}
