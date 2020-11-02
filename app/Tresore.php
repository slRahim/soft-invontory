<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tresore extends Model
{
    protected $fillable = [
        'code_caisse' ,'solde_init', 'solde' , 'montant_sortie' , 'montant_entre',
    ];

    protected $hidden =[

    ];
}
