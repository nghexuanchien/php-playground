<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => null,
                'position' => 0,
                'target' => null,
                'link_type' => 'page',
                'class' => '',
                'module_name' => null,
                'parent_id' => null,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' => 1,
                'icon' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => 1,
                'position' => 0,
                'target' =>'_blank',
                'link_type' => 'page',
                'class' => null,
                'module_name' => null,
                'parent_id' => 1,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' =>0,
                'icon' =>null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => null,
                'position' => 1,
                'target' => '_self',
                'link_type' => 'internal',
                'class' => null,
                'module_name' => null,
                'parent_id' => 2,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' => 0,
                'icon' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => null,
                'position' => 1,
                'target' => '_self',
                'link_type' => 'internal',
                'class' => null,
                'module_name' => null,
                'parent_id' => 1,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' => 0,
                'icon' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => 2,
                'position' =>2,
                'target' => '_self',
                'link_type' => 'page',
                'class' => null,
                'module_name' => null,
                'parent_id' => 1,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' => 0,
                'icon' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('menu__menuitems')->insert([
            [
                'menu_id' => 1,
                'page_id' => 1,
                'position' => 0,
                'target' => '_self',
                'link_type' => 'page',
                'class' => null,
                'module_name' => null,
                'parent_id' => 2,
                'lft' => null,
                'rgt' => null,
                'depth' => null,
                'is_root' => 0,
                'icon' => null,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
