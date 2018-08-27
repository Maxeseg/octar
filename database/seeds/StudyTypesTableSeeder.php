<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('study_types')->insert(['name' => 'Case Control study',]);
        DB::table('study_types')->insert(['name' => 'Retrospective cohort',]);
        DB::table('study_types')->insert(['name' => 'Prospective cohort',]);
        DB::table('study_types')->insert(['name' => 'Clinical Trial, Phase I',]);
        DB::table('study_types')->insert(['name' => 'Clinical Trial, Phase II',]);
        DB::table('study_types')->insert(['name' => 'Clinical Trial, Phase III',]);
        DB::table('study_types')->insert(['name' => 'Clinical Trial, Phase IV',]);
        DB::table('study_types')->insert(['name' => 'Meta-Analysis',]);
        DB::table('study_types')->insert(['name' => 'Observational Study',]);
        DB::table('study_types')->insert(['name' => 'Randomized Controlled Trial',]);
        DB::table('study_types')->insert(['name' => 'Review',]);
        DB::table('study_types')->insert(['name' => 'Systematic Reviews',]);
    }
}
