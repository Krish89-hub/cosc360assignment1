<?php
// command to create this file: php artisan make: seeder PostSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // reference: from week 3 lectures
        Post::factory()->count(10)->create();
        //then run `php artisan db:seed --class=PostSeeder` to seed the `posts` table 
    }
}
