<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic as Comic;
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //test
        $artists = [];
        $writers = [];
        for($a=0; $a<5; $a++) {
            $artists [] = $faker->firstName();
        }
        for($w=0; $w<5; $w++) {
            $writers [] = $faker->firstName();
        }
        //end test

        for($k=0; $k<30; $k++) {
            $comic = new Comic();

            $comic->title = $faker->words(3, true);
            $comic->description = $faker->realText($maxNbChars = 300, $indexSize = 3);
            $comic->thumb = $faker->word.'/'.$faker->word().'.jpg';
            $comic->price = $faker->randomFloat(2, 1, 350).'€';
            $comic->series = $faker->words(4, true);
            $comic->sale_date = $faker->date();
            $comic->type = $faker->words(2, true);
            $comic->artists = json_encode($faker->randomElements($artists));
            $comic->writers = $faker->json_encode($faker->randomElements($writers));
        }
    }
}
