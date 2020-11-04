<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitFactureClient extends Model
{
    protected $fillable = [
        'article_id' ,'facture_client_id' ,
        'qte_vendus' ,'colis', 'prix_unite_vendus' ,
        'montant_vendus', 'marge_vendus' ,
    ];

    protected $hidden =[

    ];
}
