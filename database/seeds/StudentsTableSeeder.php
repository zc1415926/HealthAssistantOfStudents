<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(
            array(
                [
                    'num'      => '7',
                    'sex'       => '男',
                    'height'    => '168',
                    'weight'    => '65',
                ],[
                    'num'      => '19',
                    'sex'       => '女',
                    'height'    => '158',
                    'weight'    => '45',
                ]
            ));
    }
}