<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home()
    {
        // Mengambil artikel terbaru untuk ditampilkan di home page
        $articles = Article::latest()->take(2)->get();
        $categories = Category::all();

        return view('home', compact(['articles', 'categories']));
    }
}
