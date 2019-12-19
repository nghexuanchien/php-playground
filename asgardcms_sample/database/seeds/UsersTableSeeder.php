<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('roles')->insert([
            [
                'email' => 'publisher@wondaris.com',
                'password' => '$10$Mm8YjiFRVpKcPa8tI1Jaaex9HJ7pE75IHoyWMxN/aIu2QbFb6/aoa',
                'permissions' => null,
                'last_login' => '2019-12-19 15:07:39',
                'first_name' => 'Publisher',
                'last_name' => 'Publisher',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33']
        ]);
    }
}
