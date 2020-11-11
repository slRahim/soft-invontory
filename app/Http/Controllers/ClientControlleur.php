<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client ;
use Illuminate\Support\Facades\DB as DB;

class ClientControlleur extends Controller
{

    public function addClient(Request $request){
        $client=new Client();
        $statement = DB::select("SHOW TABLE STATUS LIKE 'clients'");
        $nextId = $statement[0]->Auto_increment;
        $year=date('Y');

        $client->code_client="cl$nextId/$year";
        $client->nom=$request->client_nom;
        $client->adresse=$request->client_adresse;
        $client->ville=$request->client_ville;
        $client->mobile1=$request->client_mobile1;
        $client->mobile2=$request->client_mobile2;
        $client->email=$request->client_email;
        $client->code_postale=$request->client_code_postale;

        $client->save();
        return redirect("/client/$nextId");
    }
    public function editClient(Request $request , $id){
        $client=Client::find($id);

        $client->nom=$request->client_nom;
        $client->adresse=$request->client_adresse;
        $client->ville=$request->client_ville;
        $client->mobile1=$request->client_mobile1;
        $client->mobile2=$request->client_mobile2;
        $client->email=$request->client_email;
        $client->code_postale=$request->client_code_postale;

        $result=$client->save();
        $data=[
            'success'=>$result,
        ];
        return $data;
    }
    public function getClient($id){
        $client=Client::find($id);

        $data=[
            'from'=>'client',
            'client'=>$client,
        ];
        return view('profileClient',$data);
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
        return redirect('/clients');
    }
}
