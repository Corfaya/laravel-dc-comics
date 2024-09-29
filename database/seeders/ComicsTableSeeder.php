<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic as Comic;
// use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicList = config('db');

        foreach($comicList as $comic) {
            $comic_detail = new Comic();

            $comic_detail->title = $comic['title'];
            $comic_detail->description = $comic['description'];
            $comic_detail->thumb = $comic['thumb'];
            $comic_detail->price = floatval(str_replace('$', '', $comic['price']));
            $comic_detail->series = $comic['series'];
            $comic_detail->sale_date = $comic['sale_date'];
            $comic_detail->type = $comic['type'];
            $comic_detail->artists = implode(', ', $comic['artists']);
            $comic_detail->writers = implode(', ', $comic['writers']);

            $comic_detail->save();
        }

        

            

            
        
    }
}
