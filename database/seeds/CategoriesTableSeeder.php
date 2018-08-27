<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name' => 'Head and Neck Cancers',]);
        DB::table('categories')->insert(['name' => 'NSCLC',]);
        DB::table('categories')->insert(['name' => 'SCLC',]);
        DB::table('categories')->insert(['name' => 'Neuroendocrine Tumors of the Lung',]);
        DB::table('categories')->insert(['name' => 'Mediastinal Tumors',]);
        DB::table('categories')->insert(['name' => 'Esophageal Cancer',]);
        DB::table('categories')->insert(['name' => 'Gastric Cancer',]);
        DB::table('categories')->insert(['name' => 'Pancreatic cancer',]);
        DB::table('categories')->insert(['name' => 'Liver Cancer',]);
        DB::table('categories')->insert(['name' => 'Biliary Cancers',]);
        DB::table('categories')->insert(['name' => 'Small Bowel Cancers',]);
        DB::table('categories')->insert(['name' => 'Gastrointestinal Stromal Tumors',]);
        DB::table('categories')->insert(['name' => 'Colorectal Cancers',]);
        DB::table('categories')->insert(['name' => 'Anal Cancers',]);
        DB::table('categories')->insert(['name' => 'Kidney Cancer',]);
        DB::table('categories')->insert(['name' => 'Bladder Cancer',]);
        DB::table('categories')->insert(['name' => 'Prostate Cancer',]);
        DB::table('categories')->insert(['name' => 'Uterine Cancer',]);
        DB::table('categories')->insert(['name' => 'Cervical Cancer',]);
        DB::table('categories')->insert(['name' => 'Vaginal Cancer',]);
        DB::table('categories')->insert(['name' => 'Vulvar Cancer',]);
        DB::table('categories')->insert(['name' => 'Ovarian Cancer',]);
        DB::table('categories')->insert(['name' => 'Breast Cancer',]);
        DB::table('categories')->insert(['name' => 'Endocrinal Cancers',]);
        DB::table('categories')->insert(['name' => 'Soft Tissue Sarcoma',]);
        DB::table('categories')->insert(['name' => 'Bone Sarcoma',]);
        DB::table('categories')->insert(['name' => 'Squamous Cell Carcinoma',]);
        DB::table('categories')->insert(['name' => 'Basal Cell Carcinoma',]);
        DB::table('categories')->insert(['name' => 'Melanoma',]);
        DB::table('categories')->insert(['name' => 'Other Skin Tumors',]);
        DB::table('categories')->insert(['name' => 'CNS Tumors',]);
        DB::table('categories')->insert(['name' => 'Non Hodgkin Lymphoma',]);
        DB::table('categories')->insert(['name' => 'Hodgkin Lymphoma',]);
        DB::table('categories')->insert(['name' => 'Cutaneous Lymphoma',]);
        DB::table('categories')->insert(['name' => 'Multiple Myeloma',]);
        DB::table('categories')->insert(['name' => 'Leukemias',]);
        DB::table('categories')->insert(['name' => 'Malignant Mesothelioma',]);
        DB::table('categories')->insert(['name' => 'Oncological Emergencies',]);
        DB::table('categories')->insert(['name' => 'Treatment related adverse events',]);
        DB::table('categories')->insert(['name' => 'Supportive and Palliative care',]);

    }
}
