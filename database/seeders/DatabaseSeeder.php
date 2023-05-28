<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            MemoTestSeeder::class,
            ImageSeeder::class,
            GameSessionSeeder::class,
        ]);
    }

}
