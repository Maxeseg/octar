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
        //
        DB::table('users')->insert([
            'name' => 'Ahmed Mohamed',
            'email' => 'ahmed@nesthub.net',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Maxes Egypt',
            'email' => 'maxes@maxes.net',
            'password' => \Illuminate\Support\Facades\Hash::make('123456'),
        ]);
    }
}
