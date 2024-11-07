<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::all();

        return view('category', compact('categories'));
    }

    public function show($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->courses->flatmap(function ($course) {
            return $course->articles;
        });

        return view('categories', compact('category', 'articles'));
    }
}
