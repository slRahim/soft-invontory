<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitFactureFournisseur extends Model
{
    protected $fillable = [
        'article_id' ,'facture_fournisseur_id' ,
        'qte_article' ,'colis', 'prix_unite' , 'montant', 'marge' ,
    ];

    protected $hidden =[

    ];
}
