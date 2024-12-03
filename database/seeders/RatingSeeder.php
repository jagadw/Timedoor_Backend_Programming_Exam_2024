<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('id_ID');

        $id_author = DB::table('books')->pluck('id_author')->toArray();
        $id_book = DB::table('books')->pluck('id')->toArray();

        for ($i = 0; $i <= 500000; $i++) {
            DB::table('ratings')->insert([
                'rating' =>$faker->numberBetween(1, 10),
                'id_book' =>$faker->randomElement($id_book),
                'id_author' =>$faker->randomElement($id_author),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
