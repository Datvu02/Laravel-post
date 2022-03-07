<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            [
                'title' => 'Bai viet 1',
                'slug' => 'bai-viet-1',
                'content' => 'content 1',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 2',
                'slug' => 'bai-viet-2',
                'content' => 'content 2',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 3',
                'slug' => 'bai-viet-3',
                'content' => 'content 3',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 4',
                'slug' => 'bai-viet-4',
                'content' => 'content 4',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 5',
                'slug' => 'bai-viet-5',
                'content' => 'content 5',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 6',
                'slug' => 'bai-viet-6',
                'content' => 'content 6',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 7',
                'slug' => 'bai-viet-7',
                'content' => 'content 7',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 8',
                'slug' => 'bai-viet-8',
                'content' => 'content 8',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 9',
                'slug' => 'bai-viet-9',
                'content' => 'content 9',
                'user_create_id' => 1,
                'category_id' => 1
            ],
            [
                'title' => 'Bai viet 10',
                'slug' => 'bai-viet-10',
                'content' => 'content 10',
                'user_create_id' => 1,
                'category_id' => 1
            ]
        ];
        foreach($posts as $post)
        {
            DB::table('posts')->insert($post);
        }
    }
}
