<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use File;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();

        $json = File::get("storage/dbdata/movies.json");
        
        $movies = json_decode($json);

        foreach ($movies as $key => $value) {
            Movie::create([
                "title" => $value->title
            ]);
        }
    }
}
