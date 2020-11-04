<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureClient extends Model
{
    protected $fillable = [
        'code_facture' , 'date'  ,'client_id' ,
          'total_ttc' , 'payer' , 'verssement' ,
        'reste','type_facture',
    ];

    protected $hidden =[

    ];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article','produit_facture_clients','facture_client_id','article_id');
    }
}
