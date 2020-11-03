<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureFournisseur extends Model
{
    protected $fillable = [
        'code_facture' , 'date' , 'heur' ,'fournissuer_id' ,
        'code_article' , 'qte_article' , 'prix_unite' , 'total_ttc' ,
        'payer' , 'verssement' , 'reste' , 'type_facture',
    ];

    protected $hidden =[

    ];

    public function fournissuer(){
        return $this->belongsTo('App\Fournisseur');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article','produit_facture_fournisseurs','facture_fournisseur_id','article_id');
    }
}
