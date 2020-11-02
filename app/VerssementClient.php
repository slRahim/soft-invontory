<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementClient extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'client_id','nom_client',
        'modalite' , 'montant' , 'objet' , 'terosore_id'
    ];

    protected $hidden =[

    ];
}
