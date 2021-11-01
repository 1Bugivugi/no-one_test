<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('index', [
            'articles' => Article::latest()->take(6)->get()
        ]);
    }

    public function main()
    {
        return view('articles', [
            'articles' => Article::latest()->paginate(6),
        ]);
    }

    public function find(Article $article)
    {
        return view('find', [
            'article' => $article
        ]);
    }
}
