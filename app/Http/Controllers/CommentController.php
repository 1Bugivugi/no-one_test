<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Article $article)
    {
        request()->validate([
            'theme' => 'required',
            'body' => 'required'
        ]);

        $article->comments()->create([
            'theme' => request('theme'),
            'body' => request('body'),
        ]);

        return back();
    }
}
