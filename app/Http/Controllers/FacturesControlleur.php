<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;


class FacturesControlleur extends Controller
{
    public function addFactureClient (Request $request){

    }
    public function editFactureClient (Request $request , $id){

    }
    public function getFacturesClient ($type){

        return view('listingFacture');
    }
    public function getFactureClient ($id){

    }
    public function dellFactureClient ($id){

    }
    public function verssementFactureClient ($id){

    }

//    ********************************************************************************

    public function addFactureFournisseur (Request $request){

    }
    public function editFactureFournisseur (Request $request , $id){

    }
    public function getFacturesFournisseur ($type){

        return view('listingFacture');
    }
    public function getFactureFournisseur ($id){

    }
    public function dellFactureFournisseur ($id){

    }
    public function verssementFactureFournisseur ($id){

    }
}
