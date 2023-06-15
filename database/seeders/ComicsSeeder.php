<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Comics;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('db');

        foreach ($arrayComics as $elem) {
            $newComics = new Comics();

            $newComics->title = $elem['title'];
            $newComics->description = $elem['description'];
            $newComics->thumb = $elem['thumb'];
            $newComics->price = $elem['price'];
            $newComics->series = $elem['series'];
            $newComics->sale_date = $elem['sale_date'];
            $newComics->type = $elem['type'];
            $newComics->artists = is_array($elem['artists']) ? implode(', ', $elem['artists']) : $elem['artists'];
            $newComics->writers = is_array($elem['writers']) ? implode(', ', $elem['writers']) : $elem['writers'];

            $newComics->save();
        }
    }
}
