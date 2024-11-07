<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $writers = [
            [
                'name' => 'Bila',
                'email' => 'bila@google.com',
                'speciality' => 'Specialis Data Science',
                'image' => 'images/writer/Bila.png'
            ],
            [
                'name' => 'Dedi',
                'email' => 'dedi@google.com',
                'speciality' => 'Specialis Network Security',
                'image' => 'images/writer/Dedi.png'
            ],
        ];

        // Menambahkan penulis ke database
        foreach ($writers as $writer) {
            Writer::create($writer);
        }
    }
}
