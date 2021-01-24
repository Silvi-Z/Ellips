<?php

use Illuminate\Database\Seeder;
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
        DB::table('users')->delete();
        $users = array(
            array(
                'name'          => 'Admin',
                'email'         => 'admin@gmail.com',
                'password'      => Hash::make('admin000'),
            )
        );
        DB::table('users')->insert($users);
    }
}
