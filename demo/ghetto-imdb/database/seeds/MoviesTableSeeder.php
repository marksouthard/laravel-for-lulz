<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder {

    public function run()
    {
        // 1
        Movie::create([
            'title' => 'Mission: Impossible - Rogue Nation',
            'release_year' => 2015,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 2
        Movie::create([
            'title' => 'Star Trek Into Darkness',
            'release_year' => 2013,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 3
        Movie::create([
            'title' => 'The Bourne Legacy',
            'release_year' => 2012,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 4
        Movie::create([
            'release_year' => 2017,
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
    }

}