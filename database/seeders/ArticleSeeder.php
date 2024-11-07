<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Course;
use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $articles = [
            [
                'title' => 'Machine Learning',
                'course' => 'Data Science',
                'writer' => 'Bila',
                'published_at' => now(),
                'image' => 'images/article/machine-learning.png'
            ],
            [
                'title' => 'Deep Learning',
                'course' => 'Data Science',
                'writer' => 'Bila',
                'published_at' => now(),
                'image' => 'images/article/deep-learning.png'
            ],
            [
                'title' => 'Natural Language Processing',
                'course' => 'Data Science',
                'writer' => 'Bila',
                'published_at' => now(),
                'image' => 'images/article/nlp.png'
            ],

            [
                'title' => 'Software Security',
                'course' => 'Network Security',
                'writer' => 'Dedi',
                'published_at' => now(),
                'image' => 'images/article/software-security.png'
            ],
            [
                'title' => 'Network Administration',
                'course' => 'Network Security',
                'writer' => 'Dedi',
                'published_at' => now(),
                'image' => 'images/article/network-administrator.png'
            ],
            [
                'title' => 'Popular Network Technology',
                'course' => 'Network Security',
                'writer' => 'Dedi',
                'published_at' => now(),
                'image' => 'images/article/popular-network-tech.png'
            ],

        ];

        foreach ($articles as $article) {
            $course = Course::where('name', $article['title'])->first();
            $writer = Writer::where('name', $article['writer'])->first();

            Article::create([
                'course_id' => $course->id,
                'writer_id' => $writer->id,
                'title' => $article['title'],
                'content' => $faker->paragraph(5),
                'image' => $article['image'],
                'published_at' => $article['published_at'],
                'views' => rand(50, 1000),
            ]);
        }
    }
}
