<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sub_categories')->insert(['name' => 'General','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Oral Cavity','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Oropharynx','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Larynx','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Hypopharynx','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Nasopharynx','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Nose','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Paranasal Sinuses','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Major Salivary Gland','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Minor Salivary Gland','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Paragangliomas','cat_id' => '1']);
        DB::table('sub_categories')->insert(['name' => 'Supportive treatment','cat_id' => '1']);


        DB::table('sub_categories')->insert(['name' => 'Surgery','cat_id' => '2']);
        DB::table('sub_categories')->insert(['name' => 'Adjuvant','cat_id' => '2']);
        DB::table('sub_categories')->insert(['name' => 'Neoadjuvant','cat_id' => '2']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '2']);


        DB::table('sub_categories')->insert(['name' => 'Limited stage','cat_id' => '3']);
        DB::table('sub_categories')->insert(['name' => 'Advanced Stage','cat_id' => '3']);


        DB::table('sub_categories')->insert(['name' => 'Thymic Neoplasms','cat_id' => '5']);
        DB::table('sub_categories')->insert(['name' => 'Germ Cell Tumor','cat_id' => '5']);


        DB::table('sub_categories')->insert(['name' => 'Locoregional Disease','cat_id' => '6']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '6']);


        DB::table('sub_categories')->insert(['name' => 'Locoregional Disease','cat_id' => '7']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '7']);

        DB::table('sub_categories')->insert(['name' => 'Localized disease','cat_id' => '8']);
        DB::table('sub_categories')->insert(['name' => 'Locally Advanced Disease','cat_id' => '8']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '8']);


        DB::table('sub_categories')->insert(['name' => 'Localized disease','cat_id' => '9']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '9']);


        DB::table('sub_categories')->insert(['name' => 'Localized disease','cat_id' => '10']);
        DB::table('sub_categories')->insert(['name' => 'Locally Advanced Disease','cat_id' => '10']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '10']);

        DB::table('sub_categories')->insert(['name' => 'Adjuvant','cat_id' => '11']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic','cat_id' => '11']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '12']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '12']);

        DB::table('sub_categories')->insert(['name' => 'Neoadjuvant','cat_id' => '13']);
        DB::table('sub_categories')->insert(['name' => 'Adjuvant','cat_id' => '13']);
        DB::table('sub_categories')->insert(['name' => 'Surgery','cat_id' => '13']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic','cat_id' => '13']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '14']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '14']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '15']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '15']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '16']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '16']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '17']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '17']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '18']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '18']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '19']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '19']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '20']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '20']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '21']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '21']);



        DB::table('sub_categories')->insert(['name' => 'Adjuvant','cat_id' => '23']);
        DB::table('sub_categories')->insert(['name' => 'Neoadjuvant','cat_id' => '23']);
        DB::table('sub_categories')->insert(['name' => 'Surgery','cat_id' => '23']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '23']);



        DB::table('sub_categories')->insert(['name' => 'Thyroid Tumors','cat_id' => '24']);
        DB::table('sub_categories')->insert(['name' => 'Parathyroid Tumors','cat_id' => '24']);
        DB::table('sub_categories')->insert(['name' => 'Adrenal Tumors','cat_id' => '24']);
        DB::table('sub_categories')->insert(['name' => 'Pancreatic Neuroendocrine Tumors','cat_id' => '24']);
        DB::table('sub_categories')->insert(['name' => 'Carcinoid Tumors','cat_id' => '24']);
        DB::table('sub_categories')->insert(['name' => 'Multiple Endocrine Neoplasia','cat_id' => '24']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '25']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '25']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '26']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '26']);


        DB::table('sub_categories')->insert(['name' => 'Localized Disease','cat_id' => '29']);
        DB::table('sub_categories')->insert(['name' => 'Metastatic & Recurrent Disease','cat_id' => '29']);

        DB::table('sub_categories')->insert(['name' => 'High Grade Glioma','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Low Grade Gliomas','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Meningioma','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Ependymoma','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Medulloblastoma','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Pituitary Tumors','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Spinal Tumors','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Primary CNS Lymphoma','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'CNS Metastasis','cat_id' => '31']);
        DB::table('sub_categories')->insert(['name' => 'Other CNS Tumors','cat_id' => '31']);


        DB::table('sub_categories')->insert(['name' => 'Early Stage','cat_id' => '33']);
        DB::table('sub_categories')->insert(['name' => 'Advanced Stage','cat_id' => '33']);



        DB::table('sub_categories')->insert(['name' => 'ALL','cat_id' => '36']);
        DB::table('sub_categories')->insert(['name' => 'AML','cat_id' => '36']);
        DB::table('sub_categories')->insert(['name' => 'CML','cat_id' => '36']);
        DB::table('sub_categories')->insert(['name' => 'CLL','cat_id' => '36']);



        DB::table('sub_categories')->insert(['name' => 'Infection','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Neutropenia','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Thrombocytopenia','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Anemia','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'VTE','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Nausea and Vomiting','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Diarrhea and Constipation','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Oral Complications','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Pulmonary Toxicity','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Cardiac Toxicity','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Hair Loss','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Gonadal Dysfunction','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Fatigue','cat_id' => '39']);
        DB::table('sub_categories')->insert(['name' => 'Neurocognitive Dysfunction','cat_id' => '39']);



        DB::table('sub_categories')->insert(['name' => 'Pain Management','cat_id' => '40']);
        DB::table('sub_categories')->insert(['name' => 'Nutritional Support','cat_id' => '40']);
        DB::table('sub_categories')->insert(['name' => 'Sexual Problems','cat_id' => '40']);
        DB::table('sub_categories')->insert(['name' => 'Psychological Issues','cat_id' => '40']);

    }
}
