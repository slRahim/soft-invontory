<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BonRetour extends Model
{
    protected $fillable = [
        'code_facture' , 'date' , 'heur' ,'client_id' , 'nom_client',
        'code_article' , 'qte_article' , 'prix_unite' , 'total_ttc' ,
    ];

    protected $hidden =[

    ];
}
