<?php

namespace App\Http\Controllers;
use App\Post;
class PostsController 
{
    public function show($slug)
    {
    
    $post = Post::where('slug', $slug)->first();
      
        if(!$post){
            abort(404, 'sorry not found');
        }
      
        return view ('post', [
            'post'=>$post
            ]); 
      
    }
}
?>