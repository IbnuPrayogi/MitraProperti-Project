<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('blogs')->insert([
            // Panduan Category
            [
                'title' => 'Panduan Blog Post 1',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the first panduan blog post.',
                'category' => 'panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panduan Blog Post 2',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the second panduan blog post.',
                'category' => 'panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panduan Blog Post 3',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the third panduan blog post.',
                'category' => 'panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panduan Blog Post 4',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fourth panduan blog post.',
                'category' => 'panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Panduan Blog Post 5',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fifth panduan blog post.',
                'category' => 'panduan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Lifestyle Category
            [
                'title' => 'Lifestyle Blog Post 1',
                'picture' => ' 3faces.jpg',
                'content' => 'This is the content of the first lifestyle blog post.',
                'category' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lifestyle Blog Post 2',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the second lifestyle blog post.',
                'category' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lifestyle Blog Post 3',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the third lifestyle blog post.',
                'category' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lifestyle Blog Post 4',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fourth lifestyle blog post.',
                'category' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lifestyle Blog Post 5',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fifth lifestyle blog post.',
                'category' => 'lifestyle',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Tips Category
            [
                'title' => 'Tips Blog Post 1',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the first tips blog post.',
                'category' => 'tips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Blog Post 2',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the second tips blog post.',
                'category' => 'tips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Blog Post 3',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the third tips blog post.',
                'category' => 'tips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Blog Post 4',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fourth tips blog post.',
                'category' => 'tips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tips Blog Post 5',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fifth tips blog post.',
                'category' => 'tips',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // News Category
            [
                'title' => 'News Blog Post 1',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the first news blog post.',
                'category' => 'news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Blog Post 2',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the second news blog post.',
                'category' => 'news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Blog Post 3',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the third news blog post.',
                'category' => 'news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Blog Post 4',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fourth news blog post.',
                'category' => 'news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'News Blog Post 5',
                'picture' => '3faces.jpg',
                'content' => 'This is the content of the fifth news blog post.',
                'category' => 'news',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
