<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcompteEmp extends Model
{
    protected $fillable = [
        'code_acompte' , 'date' , 'emp_id',
        'modalite' , 'montant' , 'objet' , 'tresore_id'
    ];

    protected $hidden =[

    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function teresore(){
        return $this->belongsTo('App\Tresore');
    }

}
