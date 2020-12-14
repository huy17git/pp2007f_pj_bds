<?php

use Faker\Factory;
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
        for ($i=0; $i<150; $i++) {
        $faker = Faker\Factory::create();
        DB::table('products')->insert ([
        'title' => $faker->sentence,
        'type' => rand(0,2),
        'post_type_id' => rand(1, 4),
        'price' => rand(1, 10),
        'area' => rand(20, 200),
        'image_id' => rand(1, 50),
        'views' => rand(100,1000),
        'slug' => rand(1, 100000),
        'number_of_bedroom' => rand(1, 5),
        'number_of_restroom' => rand(1, 3),
        'number_of_floor' => rand(1, 5),
        'address' => $faker->address,
        'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
        'province_code' => '1',
        'district_code' => '1',
        'ward_code' => '1',
        'menu_category_id' => rand(1,6),
        'user_id' => rand(1,50),
        'unit' => 'tỷ',
        'post_price' => rand(50000, 150000),
        'started_at' => date('Y-m-d H:i:s'),
        'expired_at' => date('Y-m-d H:i:s'),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
}
