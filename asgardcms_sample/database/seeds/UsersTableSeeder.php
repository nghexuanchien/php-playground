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
        $admin = DB::table('users')->where('id', 1)->get();
        DB::table('users')->insert([
            [
                'email' => 'publisher@wondaris.com',
                'password' => $admin[0]->password,
                'permissions' => null,
                'last_login' => '2019-12-19 15:07:39',
                'first_name' => 'Publisher',
                'last_name' => 'Publisher',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33']
        ]);
    }
}
