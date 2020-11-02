<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actionnaire extends Model
{
    protected $fillable = [
        'code_actionnaire' , 'nom', 'pourcentage'
    ];

    protected $hidden =[

    ];
}
