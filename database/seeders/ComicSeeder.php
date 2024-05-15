<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicBooks = config('comics.comics');

        foreach ($comicBooks as $comicBook){
            $comic = new Comic();
            $comic->title = $comicBook['title'];
            $comic->description = $comicBook['description'];
            $comic->thumb = $comicBook['thumb'];
            $comic->price = $comicBook['price'];
            $comic->series = $comicBook['series'];
            $comic->sale_date = $comicBook['sale_date'];
            $comic->type = $comicBook['type'];
            $comic->writers = $comicBook['writers'];
            $comic->artists = $comicBook['artists'];
            $comic->save();
        }
    }
}
