<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Manga Book',
                "price"=>"1000",
                "description"=>"about the Heart Brocken",
                "category"=>"Drama",
                "gallery"=>"https://i.ibb.co/V3MYQqN/1030865.jpg",
            ],
            [
                'name'=>'Sex Book',
                "price"=>"2000",
                "description"=>"about the Sex",
                "category"=>"18+",
                "gallery"=>"https://i.ibb.co/RgfMm43/ultra.jpg",
            ],
            [
                'name'=>'Romance Book',
                "price"=>"1500",
                "description"=>"about the Love",
                "category"=>"Romance",
                "gallery"=>"https://i.ibb.co/cwMR2x7/wp5768342.jpg",
            ],
            [
                'name'=>'Mage Book',
                "price"=>"1000",
                "description"=>"about the Mage",
                "category"=>"Mage",
                "gallery"=>"https://i.ibb.co/2hgBBgh/wp6376987.jpg",
            ],
            [
                'name'=>'Action Book',
                "price"=>"1000",
                "description"=>"about the Fighting",
                "category"=>"Action",
                "gallery"=>"https://i.ibb.co/Y3Pybsw/21040707413849.jpg",
            ]
        ]);
    }
}
