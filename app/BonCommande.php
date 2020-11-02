<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonCommande extends Model
{
    protected $fillable = [
        'code_commande' , 'date' , 'heur' ,'fournissuer_id' , 'nom_fournissuer',
        'code_article' , 'qte_article' , 'prix_unite' , 'total_ttc'
    ];

    protected $hidden =[

    ];
}
