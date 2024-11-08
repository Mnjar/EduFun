<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'speciality', 'image'];

    // Berelasi one-to-many dengan Article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
