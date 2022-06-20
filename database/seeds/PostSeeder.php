<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db.posts');

        foreach($posts as $post) {

            $new_post = new Post();
            $new_post->title = $post['title'];
            $new_post->title = $post['cover'];
            $new_post->title = $post['excerpt'];
            $new_post->title = $post['author'];
            $new_post->title = $post['body'];
            $new_post->save();

        }
    }
}
