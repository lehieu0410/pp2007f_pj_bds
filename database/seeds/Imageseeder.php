<?php

use Illuminate\Database\Seeder;

class Imageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 1000; $i++){      

        DB::table('image')->insert(
            [
            'link'=>$faker->imageUrl($width = 640, $height = 480),
            'name'=>Str::random(10),
            'product_id'=>rand(1, 1000),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ]
            );
       }   
    }}
