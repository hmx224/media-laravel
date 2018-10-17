<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate();

        return view('article/index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article/show', compact('article'));
    }

    public function create()
    {
        return view('article/create');
    }

    public function store()
    {
        //验证
        $this->validate(request()->all(),[
            'title' =>'required|string|max:100|min:5',
            'content'=>'required|string'
        ]);
        $article = Article::create(request(['title', 'content']));
        return redirect('/articles');
    }

    public function edit()
    {
        return view('article/edit');
    }

    public function update()
    {

    }
}
