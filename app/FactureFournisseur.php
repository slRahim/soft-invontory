<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactureFournisseur extends Model
{
    protected $fillable = [
        'code_facture' , 'date' ,'fournisseur_id' ,
         'total_ttc' , 'payer' , 'verssement' ,
        'reste' , 'type_facture',
    ];

    protected $hidden =[

    ];

    public function fournissuer(){
        return $this->belongsTo('App\Fournisseur');
    }

    public function verssementFournisseurs (){
        return $this->hasMany('App\VerssementFournisseur','facture_id');
    }

    public function articles()
    {
        return $this->belongsToMany('App\Article','produit_facture_fournisseurs','facture_fournisseur_id','article_id');
    }
}
