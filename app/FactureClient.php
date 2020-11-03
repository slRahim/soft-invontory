<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureClient extends Model
{
    protected $fillable = [
        'code_facture' , 'date' , 'heur' ,'client_id' ,
        'code_article' , 'qte_article' , 'prix_unite' , 'total_ttc' ,
        'payer' , 'verssement' , 'reste','type_facture',
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
