<?php

namespace Database\Seeders;

use App\Models\GameSession;
use App\Models\MemoTest;
use Illuminate\Database\Seeder;

class GameSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memoTest1 = MemoTest::find(1);
        $memoTest2 = MemoTest::find(2);

        GameSession::create([
            'memo_test_id' => $memoTest1->id,
            'retries' => 0,
            'number_of_pairs' => 4,
            'state' => 'Started',
        ]);

        GameSession::create([
            'memo_test_id' => $memoTest2->id,
            'retries' => 0,
            'number_of_pairs' => 4,
            'state' => 'Started',
        ]);
    }
}
