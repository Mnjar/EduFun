<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($categorySlug, $courseSlug, $articleId)
    {
        $category = Category::where('slug', $categorySlug)->first();
        $course = $category->courses()->where('slug', $courseSlug)->first();
        $article = $course->articles()->find($articleId);

        return view('article', compact('category', 'course', 'article'));
    }
}
