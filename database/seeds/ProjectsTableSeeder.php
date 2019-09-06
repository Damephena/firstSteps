<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate existing records to start from scratch
        // Product::truncate();

        $faker = \Faker\Factory::create();

        // create products in DB
        for($i = 0; $i < 10; $i++) {
            // Product::create([
            //     'name' => $faker->word,
            //     'description' => $faker->realText($maxNbChars = 20, $indexSize = 1),
            //     'qty' => $faker->randomDigit
            // ]);
        }
    }
}
