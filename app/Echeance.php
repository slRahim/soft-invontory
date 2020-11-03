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

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function fournisseur()
    {
        return $this->belongsTo('App\Fournisseur');
    }


}
