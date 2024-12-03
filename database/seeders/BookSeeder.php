<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $id_author = DB::table('authors')->pluck('author_id')->toArray();
        $id_category = DB::table('categories')->pluck('category_id')->toArray();
        $id_rating = DB::table('ratings')->pluck('rating_id')->toArray();

            // if (!empty($id_author) && !empty($id_category) && !empty($id_rating)) {
            $books = [];
            for ($i = 0; $i <= 100000; $i++) {
                DB::table('books')->insert([
                    'title' => $faker->sentence(3),
                    'id_author' => $faker->randomElement($id_author),
                    'id_category' => $faker->randomElement($id_category),
                    'id_rating' => $faker->randomElement($id_rating),
                    'price' => $faker->numberBetween(10000, 100000),
                    'publisher' => $faker->company,
                    'released_date' => $faker->date(),
                    'created_at'=>now(),
                    'updated_at'=>now()
                    ]);

                    if (count($books) === 1000) {

                        DB::table('books')->insert($books);
    
                        $books = [];
    
                    }
            }
            if (count($books) > 0) {

                DB::table('books')->insert($books);

            }
            echo "100.000 data fake sudah berhasil.";
        // } else {
        //     echo "Tidak ada ID author atau rating yang valid.";
        // }
    }
}