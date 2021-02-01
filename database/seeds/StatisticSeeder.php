<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->delete();
        $users = array(
            array(
                'year_exp'          => 30,
                'works'         => 250,
                'work_brands'      => 40,
                'exp_workers'      => 100,
            )
        );
        DB::table('statistics')->insert($users);
    }
}
