<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'writer_id', 'title', 'content', 'image', 'published_at', 'views'];

    // Casting attribute 'published_at' to a date
    protected $casts = [
        'published_at' => 'datetime',
    ];

    // Berelasi dengan Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Berelasi dengan writer
    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function category()
    {
        return $this->hasOneThrough(Category::class, Course::class, 'id', 'id', 'course_id', 'category_id');
    }
}
