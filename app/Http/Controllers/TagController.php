<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function main(Tag $tag)
    {
        return view('tags.index', [
            'articles' => $tag->articles->load(['tag'])
        ]);
    }
}
