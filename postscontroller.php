<?php

namespace App\Http\Controllers;

class PostsController 
{
    public function show($post)
    {
     
       $posts = [
           'my-first-post' => 'Hello this is my first post',
            'my-second-post' => 'This is my second post.'
        ];
      
        if(! array_key_exists($post,$posts)){
            abort(404, 'sorry not found');
        }
      
        return view ('post',[
            'post'=>$posts[$post]
            ]);
      
    }
}