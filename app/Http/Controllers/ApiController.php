<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Post;

class ApiController extends Controller
{
    // public function index(Request $request){
    //     $clients = Client::all();
        

    //     return response($clients, 200);
    // }

    // public function get_client(Request $request){
    //      $client = Client::find($request->client_id); 

    //      if($client == null ){
    //         return response(['message'=> 'no such client!'], 404);
    //      }

    //      return response($client, 200);

    // }

    public function index(Request $request){
        $posts = Post::all();
        

        return response($posts, 200);
    }

    public function get_post(Request $request){
         $post = Post::find($request->post_id); 

         if($post == null ){
            return response(['message'=> 'no such post!'], 404);
         }

         return response($post, 200);

    }
}
