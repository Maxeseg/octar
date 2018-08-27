<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlindingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('blinding')->insert(['name' => 'Open Label',]);
        DB::table('blinding')->insert(['name' => 'Single blinded',]);
        DB::table('blinding')->insert(['name' => 'Double Blinded',]);
        DB::table('blinding')->insert(['name' => 'Triple blinded',]);

    }
}
