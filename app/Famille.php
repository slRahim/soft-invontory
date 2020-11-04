<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $fillable = [
        'code_famille', 'libelle','pourcentage_marge1',
        'pourcentage_marge2',
    ];

    protected $hidden =[

    ];

    public function articles (){
        return $this->hasMany('App\Article');
    }
}
