<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcompteEmp extends Model
{
    protected $fillable = [
        'code_acompte' , 'date' , 'emp_id',
        'modalite' , 'montant' , 'objet' ,
    ];

    protected $hidden =[

    ];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }


}
