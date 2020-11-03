<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitFactureClient extends Model
{
    protected $fillable = [
        'article_id' ,'facture_client_id' ,
        'qte_article' ,'colis', 'prix_unite' , 'montant', 'marge' ,
    ];

    protected $hidden =[

    ];
}
