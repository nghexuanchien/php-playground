<?php


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('activations')->insert([
            [
                'user_id' => 2,
                'code' => 'B8To77PhPQUATdpYipQGoQeseQPjG6cD',
                'completed' => 1,
                'completed_at'=> '2019-12-19 13:10:33',
                'created_at' => '2019-12-19 13:10:33',
                'updated_at' => '2019-12-19 13:10:33'
            ]
        ]);
    }
}
