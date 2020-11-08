<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actionnaire extends Model
{
    protected $fillable = [
        'id','code_actionnaire' , 'nom', 'adresse',
        'mobile1', 'pourcentage'
    ];

    protected $hidden =[

    ];
}
