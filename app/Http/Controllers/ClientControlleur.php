<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client ;

class ClientControlleur extends Controller
{

    public function addClient(Request $request){
        $client=new Client();

        $client->save();
        return view();
    }
    public function editClient(Request $request , $id){
        $client=Client::find($id);

        $client->save();
        return route();
    }
    public function getClient($id){
        $client=Client::find($id);

        return route();
    }
    public function getClients(){
        $clients=Client::all();

        $data=[
          'from_title'=>'الزبائن',
          'from'=>'client',
            'clients'=>$clients
        ];
        return view('listing_rh',$data);
    }
    public function dellClient($id){
        Client::destroy($id);

        return route();
    }
}
