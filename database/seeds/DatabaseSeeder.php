<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(DistrictSeeder::class);
        $this->call(WardSeeder::class);
        
        $this->call(DistrictSeeder::class);

        $this->call(ProvinceSeeder::class);

        $this->call(ProductSeeder::class);



        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);

        $this->call(ImageSeeder::class);
    }
}
