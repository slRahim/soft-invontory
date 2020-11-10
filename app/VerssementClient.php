<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementClient extends Model
{
    protected $fillable = [
        'code_verssement' , 'date', 'client_id',
        'modalite' , 'montant' , 'objet' ,
    ];

    protected $hidden =[

    ];


    public function client(){
        return $this->belongsTo('App\Client');
    }


}
