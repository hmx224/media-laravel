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
        $articles = Article::orderBy('created_at', 'desc')->where('isshow', '1')->paginate();

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
        //验证  //英文改中文提示 resource -》lang-》，直接改配置文件app.php
        $this->validate(request(), [
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10'
        ]);

        $article = Article::create(request(['title', 'content']));

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('article/edit', compact('article'));
    }

    public function update(Article $article)
    {
        $this->validate(request(), [
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10'
        ]);

        $article->title   = request('title');
        $article->content = request('content');

        $article->save();

        return redirect("articles/{$article->id}");
    }

    public function delete(Article $article)
    {

        $article->isshow = 0;
        $article->save();

        return redirect('articles');
    }

    //编辑器图片上传
    public function imageUpload(Request $request)
    {
//        dd($request->all());die; //
        //TODO
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/' . $path);
    }
}
