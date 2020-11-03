<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerssementClient extends Model
{
    protected $fillable = [
        'code_verssement' , 'date' , 'client_id',
        'modalite' , 'montant' , 'objet' , 'tresore_id'
    ];

    protected $hidden =[

    ];

    public function teresore(){
        return $this->belongsTo('App\Tresore');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }


}
