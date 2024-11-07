<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'slug', 'description'];

    // Berelasi ke Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Berelasi one-to-many dengan Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
