<?php

namespace App\Http\Controllers;
use App\Post;
class PostsController 
{
    public function show($slug)
    {
    
    $post = Post::where('slug', $slug)->firstOrFail();
       
        return view ('post', [
            'post'=>$post
            ]); 
      
    }
}
?>