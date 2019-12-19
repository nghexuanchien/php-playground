<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('blog__post_translations')->insert([
            [
                'post_id' => 1,
                'locale' => 'en',
                'title' => 'First post',
                'slug' => 'first-post',
                'content' => 'The content of the first post',
//                'created_at' => '2019-12-19 13:10:33',
//                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('blog__post_translations')->insert([
            [
                'post_id' => 2,
                'locale' => 'en',
                'title' => 'Second post',
                'slug' => 'second-post',
                'content' => 'The content of the second post',
//                'created_at' => '2019-12-19 13:10:33',
//                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
