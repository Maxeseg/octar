<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EndPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('end_points')->insert(['name' => 'Overall Survival',]);
        DB::table('end_points')->insert(['name' => 'Progression Free Survival',]);
        DB::table('end_points')->insert(['name' => 'Disease Free Survival',]);
        DB::table('end_points')->insert(['name' => 'Time To Progression',]);
        DB::table('end_points')->insert(['name' => 'Time To Treatment Failure',]);
        DB::table('end_points')->insert(['name' => 'Response Rate',]);
        DB::table('end_points')->insert(['name' => 'Depth of Response',]);
        DB::table('end_points')->insert(['name' => 'Toxicity',]);
        DB::table('end_points')->insert(['name' => 'Quality of Life',]);
        DB::table('end_points')->insert(['name' => 'All Results',]);

    }
}
