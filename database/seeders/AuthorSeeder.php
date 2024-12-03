<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 1000; $i++) {
            DB::table('authors')->insert([
                'name' => $faker->name,
                'gender' => $faker->randomElement(['male','female']),
                'email' => $faker->unique()->safeEmail(),
                'address' => $faker->address,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
