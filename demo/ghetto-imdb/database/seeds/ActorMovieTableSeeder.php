<?php

use Illuminate\Database\Seeder;

class ActorMovieTableSeeder extends Seeder {

    public function run()
    {
        // Mission Impossible
        DB::table('actor_movie')->insert([
            'actor_id' => 1,
            'movie_id' => 1
        ]);

        DB::table('actor_movie')->insert([
            'actor_id' => 2,
            'movie_id' => 1
        ]);

        DB::table('actor_movie')->insert([
            'actor_id' => 3,
            'movie_id' => 1
        ]);

        // Star Trek
        DB::table('actor_movie')->insert([
            'actor_id' => 2,
            'movie_id' => 2
        ]);
        DB::table('actor_movie')->insert([
            'actor_id' => 4,
            'movie_id' => 2
        ]);

        // Bourne
        DB::table('actor_movie')->insert([
            'actor_id' => 3,
            'movie_id' => 3
        ]);

    }

}