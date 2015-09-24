<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            array([
                'name'      =>  "王铁柱",
                'comment'   =>  "今天学要了Excel软件的统计功能"
            ],[
                'name'      =>  "田二妞",
                'comment'   =>  "杨老师的教学网站好好看呀！"
            ])
        );
    }
}
