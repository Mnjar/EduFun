<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Data Science', 'slug' => 'data-science'],
            ['name' => 'Network Security', 'slug' => 'network-security']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
