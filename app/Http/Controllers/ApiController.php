<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ApiController extends Controller
{
    public function index(Request $request){
        $clients = Client::all();
        

        return response($clients, 200);
    }

    public function get_client(Request $request){
         $client = Client::find($request->client_id); 

         if($client == null ){
            return response(['message'=> 'no such client!'], 404);
         }

         return response($client, 200);

    }
}
