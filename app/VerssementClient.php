<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementClient extends Model
{
    protected $fillable = [
        'id','code_verssement' , 'date', 'client_id',
        'modalite' , 'montant' , 'objet' , 'facture_id'
    ];

    protected $hidden =[

    ];


    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function factureClient (){
        return $this->belongsTo('App\FactureClient');
    }
}
