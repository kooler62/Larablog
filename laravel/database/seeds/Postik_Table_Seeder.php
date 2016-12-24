<?php

use Illuminate\Database\Seeder;

class Postik_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postik')->insert([
            'post_title' => 'dgsdgsd',
           // 'email' => str_random(10).'@gmail.com',
           // 'password' => bcrypt('secret'),
        ]);
    }
}
