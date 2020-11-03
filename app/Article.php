<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'code_article' ,'code_bare', 'referance' , 'designation',
        'colis','qte_disponible', 'qte_minimale' , 'prix_achat',
        'prix_vente1' , 'prix_vente2' ,'prix_vente_min',
        'marge1' , 'pourcentage_marge1','marge2' , 'pourcentage_marge2',
        'marge_min' , 'pourcentage_marge_min',
        'stock_id' , 'famille_id'
    ];

    protected $hidden =[

    ];

    public function famille()
    {
        return $this->belongsTo('App\Famille');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock');
    }

    public function factureClients()
    {
        return $this->belongsToMany('App\FactureClient');
    }

    public function factureFournisseurs()
    {
        return $this->belongsToMany('App\FactureFournisseur');
    }


}
