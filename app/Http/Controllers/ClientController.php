<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;


use Illuminate\Http\Request;

class ClientController extends Controller
{
    // client Http request
    public function getAllPost(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getPostById($id){
        $post =Http::get('https://jsonplaceholder.typicode.com/posts'.$id);
        return $post->json();
    }
    
    public function addPost(){
        $post =Http::get('https://jsonplaceholder.typicode.com/posts',[
    'userid'=> 1,
    'tittle'=> 'new post title',
    'body'=>'new post description'
        ]);
        return $post->json();
    }
    public function updatePost(){
        $response=Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'userid'=> 'updated title',
            'body'=>'updated description'
        ]);
        return $response->json();
    }

    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
