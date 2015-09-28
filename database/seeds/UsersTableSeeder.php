<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array(
                [
                    'username'      => 'yxm',
                    'password'      => bcrypt('655641yxm'),
                    'showname'      => '杨小梅'
                ]
            ));
    }
}
