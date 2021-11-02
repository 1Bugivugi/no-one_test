<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index', [
            'articles' => Article::latest()->take(6)->get()
        ]);
    }

    public function articles()
    {
        return view('articles', [
            'articles' => Article::latest()->paginate(6),
            'tags' => Tag::all()
        ]);
    }

    public function find(Article $article)
    {
        return view('find', [
            'article' => $article
        ]);
    }

    public function likes(Article $article)
    {
        $element = Article::find($article->id);

        $element->likes += 1;

        $element->save();

        return $element->likes;
    }

    public function views(Article $article)
    {
        $element = Article::find($article->id);

        $element->views += 1;

        $element->save();

        return $element->views;
    }
}
