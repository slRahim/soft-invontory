<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonReception extends Model
{
    protected $fillable = [
        'code_facture' , 'date' , 'heur' ,'fournissuer_id' , 'nom_fournissuer',
        'code_article' , 'qte_article' , 'prix_unite' , 'total_ttc' ,
        'payer' , 'verssement' , 'reste'
    ];

    protected $hidden =[

    ];
}
