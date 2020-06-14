<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        // render a list of a resource
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }
    public function show(Article $article){
        // show a single resource
        // $article = Article::findOrFail($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }
    public function create(){
        // shows a view to create a new resource
        return view('articles.create');

    }
    public function store(){
        // persist the created resource
        // dump(request()->all());
        // $validateRequest = request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);

        // Article::create($validateRequest);

        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);

        // Article::create(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));
            Article::create($this->validateArticle());
        return redirect('/articles');
    }
    public function edit(Article $article){
        // show a form to edit an existing resource
        // find the article associated with the uri
        // $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));

    }
    public function update(Article $article){
        // persist the edited resource
        // $validateUpdate = request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]);
        //     $article->update($validateRequest);
        // $article = Article::findOrFail($id);

        // $article->update(request()->validate([
        //     'title' => 'required',
        //     'excerpt' => 'required',
        //     'body' => 'required'
        // ]));

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();
            $article->update($this->validateArticle());
        return redirect(route('article.show',$article));
    }
    public function destroy(){
        // delete the resources

    }

    public function validateArticle(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
