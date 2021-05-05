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
                "gallery"=>"https://i.ibb.co/zFtdJ3b/O40U7s5.png",
            ],
            [
                'name'=>'Sex Book',
                "price"=>"2000",
                "description"=>"about the Sex",
                "category"=>"18+",
                "gallery"=>"https://i.ibb.co/gwR6j10/Such-a-cute-Spy-8.jpg",
            ],
            [
                'name'=>'Romance Book',
                "price"=>"1500",
                "description"=>"about the Love",
                "category"=>"Romance",
                "gallery"=>"https://i.ibb.co/SdgZKdx/Such-a-cute-Spy-4.jpg",
            ],
            [
                'name'=>'Mage Book',
                "price"=>"1000",
                "description"=>"about the Mage",
                "category"=>"Mage",
                "gallery"=>"https://i.ibb.co/M8mhK6L/Verstile-3.jpg",
            ],
            [
                'name'=>'Action Book',
                "price"=>"1000",
                "description"=>"about the Fighting",
                "category"=>"Action",
                "gallery"=>"https://i.ibb.co/250hxqW/Hive-4.png",
            ]
        ]);
    }
}
