<?php

use Illuminate\Database\Seeder;
use App\Actor;

class ActorsTableSeeder extends Seeder {

    public function run()
    {
        // 1
        Actor::create([
            'name' => 'Tom Cruise',
            'image' => 'tom-cruise.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 2
        Actor::create([
            'name' => 'Simon Pegg',
            'image' => 'simon-pegg.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 3
        Actor::create([
            'name' => 'Jeremy Renner',
            'image' => 'jeremy-renner.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

        // 4
        Actor::create([
            'name' => 'Zoe Saldana',
            'image' => 'zoe-saldana.jpg',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);

    }

}