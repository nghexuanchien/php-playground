<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 1,
                'locale' => 'en',
                'status' => 0,
                'title' => 'root',
                'url' => null,
                'uri' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 2,
                'locale' => 'en',
                'status' => 1,
                'title' => 'Home',
                'url' => null,
                'uri' => 'home',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 3,
                'locale' => 'en',
                'status' => 1,
                'title' => 'Blog',
                'url' => null,
                'uri' => 'blog/posts',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 4,
                'locale' => 'en',
                'status' => 1,
                'title' => 'Contact Us',
                'url' => null,
                'uri' => 'contact',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 5,
                'locale' => 'en',
                'status' => 1,
                'title' => 'About Us',
                'url' => null,
                'uri' => 'about',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitem_translations')->insert([
            [
                'menuitem_id' => 6,
                'locale' => 'en',
                'status' => 1,
                'title' => 'Introduction',
                'url' => null,
                'uri' => 'home/home',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
