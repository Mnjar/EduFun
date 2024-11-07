<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function popular()
    {
        $popularArticles = Article::with('category', 'course')
                                ->orderBy('views', 'desc')
                                ->paginate(3);

        return view('popular', compact('popularArticles'));
    }

    public function paginate($page)
    {
        $popularArticles = Article::with('category', 'course')
                                ->orderBy('views', 'desc')
                                ->paginate(3, ['*'], 'page', $page);

        return view('popular', compact('popularArticles'));
    }
}
