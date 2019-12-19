<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('blog__posts')->insert([
            [
                'category_id' => 0,
                'status' => 2,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
        DB::table('blog__posts')->insert([
            [
                'category_id' => 0,
                'status' => 2,
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
