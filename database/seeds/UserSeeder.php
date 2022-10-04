<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
                'name' => 'kaji',
                'email' => 'kajiwara.daichi@gmail.com',
                'password' => 'hogehoge',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
