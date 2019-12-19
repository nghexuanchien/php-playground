<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('page__page_translations')->insert([
            [
                'page_id' => 2,
                'locale' => 'en',
                'title' => 'About',
                'slug' => 'about',
                'status' => 1,
                'body' => 'The content of about us page',
                'meta_title' =>null,
                'meta_description' =>null,
                'og_title' =>null,
                'og_description' =>null,
                'og_image' =>null,
                'og_type' =>null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
