<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('menu__menu_translations')->insert([
            [
                'menu_id' => 1,
                'locale' => 'en',
                'status' => 1,
                'title' => 'Main Menu',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
