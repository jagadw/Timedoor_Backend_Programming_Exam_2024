<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        //
        for ($i = 0; $i <= 3000; $i++) {
            DB::table('categories')->insert([
                'name' =>$faker->randomElement(['Novel', 'Biografi', 'Komik', 'Antologi', 'Karya Ilmiah', 'Kamus', 'Panduan']),
                'description' =>$faker->sentence(10),
                'created_at' =>now(),
                'updated_at' =>now(),
            ]);    
        }
    }
}
