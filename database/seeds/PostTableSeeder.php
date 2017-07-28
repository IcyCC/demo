<?php

use Illuminate\Database\Seeder;
use App\models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        factory(Post::class, 20)->create();
    }
}
