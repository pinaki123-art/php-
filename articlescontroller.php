<?php

namespace App\Http\Controllers;

use App\Article;


use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index ()
    {
        $articles = Article::latest()->get();
        //dd('$articleId');
        return view('articles.index', ['articles'=> $articles]);
    }

    public function show (Article $article)
    {
        //die("hello");
        //$article = Article::findorfail($id);
        //Article::where('id',1)->first();  -- This thing is implementing by (Article $article) this 
        return view('articles.show', ['article'=> $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    /*public function store()
    {
        //persist the new article die('hello');
        //dump(request()->all());
        // security 
        // clean up 

        Article::create(request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required'

        ]));

        /*$article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();*/

        //Article::create($validatedAttributes);
        /*([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        // ]);

        return redirect('/articles');
    }*/
    public function store()
    {
        Article::create($this->validateArticle());
        return redirect(route('articles.show'));
        //return redirect('/articles');
    }
    
    public function edit(Article $article)
    {
        //$article= Article::find($id);
        return view('articles.edit', compact('article'));
    }
    
    public function update(Article $article)
    {
        /*$article->update(request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required'

        ]));

        //$article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();*/
        $article->update($this->validateArticle());
        return redirect($article->path());
        //return redirect(route('articles.show', $article));
        //return redirect('/articles/'. $article->id);
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title'=> 'required',
            'excerpt'=> 'required',
            'body'=> 'required'
        ]);
    }
    /*    
    
    public function destroy()
    {

    }
    */

}
