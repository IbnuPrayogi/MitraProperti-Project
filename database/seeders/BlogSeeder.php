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
            [
                'title' => 'First Blog Post',
                'picture' => 'path/to/first-picture.jpg',
                'content' => 'This is the content of the first blog post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Blog Post',
                'picture' => 'path/to/second-picture.jpg',
                'content' => 'This is the content of the second blog post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Third Blog Post',
                'picture' => 'path/to/third-picture.jpg',
                'content' => 'This is the content of the third blog post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
