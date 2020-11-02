<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $fillable = [
        'code_famille', 'libelle','marge1','marge2'
    ];

    protected $hidden =[

    ];
}
