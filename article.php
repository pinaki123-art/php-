<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    /*public function getRouteKeyName()
    {
        return 'slug';  //Article::where('slug', $article->first()
    }    
    */

    //protected $fillable = ['title','excerpt','body']; // Article::create(request()=>all()) //['name=>'username' , 'subcriber'=>'true']
    protected $guarded = [];

    public function path()
    {
        return route('articles.show', $this);
    }

}
