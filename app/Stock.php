<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'code_stock' , 'adresse' ,
    ];

    protected $hidden =[

    ];

    public function articles(){
        return $this->hasMany('App\Article');
    }
}
