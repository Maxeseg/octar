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

        DB::table('users')->insert([
            'name' => 'Mohamed Alorabi',
            'email' => 'mohamed_alorabi@med.asu.edu.eg',
            'password' => \Illuminate\Support\Facades\Hash::make('mohamed123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dalia',
            'email' => 'daliamed85@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('dalia123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dr Loma',
            'email' => 'dr_loma85@hotmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('drloma123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Heiba Senior',
            'email' => 'heibasenior@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('heiba123456'),
        ]);


        DB::table('users')->insert([
            'name' => 'Khaled Kamal',
            'email' => 'khaledamkamal@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('khaled123456'),
        ]);


        DB::table('users')->insert([
            'name' => 'Hend Azazy',
            'email' => 'hend_azazy@hotmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('hend123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Nada Naguib',
            'email' => 'nada_naguib@yahoo.com',
            'password' => \Illuminate\Support\Facades\Hash::make('nada123456'),
        ]);


        DB::table('users')->insert([
            'name' => 'Omar AbdelRhman',
            'email' => 'omar.abdelrhman@med.asu.edu.eg',
            'password' => \Illuminate\Support\Facades\Hash::make('omar123456'),
        ]);


    }
}
