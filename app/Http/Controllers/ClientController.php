<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index() {
        $clients = Client::all();

        return view('client.index')->with(['clients' => $clients]);
    }

    public function store(Request $request){
        Client::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'age' => $request->age
        ]);

        return back(); // last view opened
    }
}
