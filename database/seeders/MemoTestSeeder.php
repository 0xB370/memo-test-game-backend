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
            'name' => 'Memo Test 1',
        ]);

        MemoTest::create([
            'name' => 'Memo Test 2',
        ]);
    }
}
