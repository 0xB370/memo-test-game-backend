<?php

namespace Database\Seeders;

use App\Models\MemoTest;
use Illuminate\Database\Seeder;

class MemoTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemoTest::create([
            'name' => 'Nature',
        ]);

        MemoTest::create([
            'name' => 'Animals',
        ]);
    }
}
