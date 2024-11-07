<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'Data Science' => [
                ['name' => 'Machine Learning', 'slug' => 'machine-learning'],
                ['name' => 'Deep Learning', 'slug' => 'deep-learning'],
                ['name' => 'Natural Language Processing', 'slug' => 'natural-language-processing'],
            ],
            'Network Security' => [
                ['name' => 'Software Security', 'slug' => 'software-security'],
                ['name' => 'Network Administration', 'slug' => 'network-administration'],
                ['name' => 'Popular Network Technology', 'slug' => 'popular-network-technology'],
            ],
        ];

        foreach($courses as $categoryName => $categoryCourses) {
            $category = Category::where('name', $categoryName)->first();
            foreach($categoryCourses as $course) {
                Course::create([
                    'category_id' => $category->id,
                    'name' => $course['name'],
                    'slug' => $course['slug'],
                    'description' => 'Deskripsi untuk ' . $course['name']
                ]);
            }
        }
    }
}
