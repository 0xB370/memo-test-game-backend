<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\MemoTest;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
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

        $memoTest1->images()->createMany([
            ['url' => 'https://example.com/image1.jpg'],
            ['url' => 'https://example.com/image2.jpg'],
            ['url' => 'https://example.com/image3.jpg'],
            ['url' => 'https://example.com/image4.jpg'],
        ]);

        $memoTest2->images()->createMany([
            ['url' => 'https://example.com/image5.jpg'],
            ['url' => 'https://example.com/image6.jpg'],
            ['url' => 'https://example.com/image7.jpg'],
            ['url' => 'https://example.com/image8.jpg'],
        ]);
    }
}
