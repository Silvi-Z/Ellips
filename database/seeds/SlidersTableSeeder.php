<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->delete();
        $sliders = array(
            array(
                'name'          => 'Admin',
            )
        );
        DB::table('sliders')->insert($sliders);
    }
}
