<?php

namespace Database\Seeders;

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
            ['url' => 'https://thumbs.dreamstime.com/z/beautiful-nature-thailand-james-bond-island-reflection-reflects-water-near-phuket-61039131.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/incredibly-beautiful-sunset-sun-lake-sunrise-landscape-panorama-nature-sky-amazing-colorful-clouds-fantasy-design-115177001.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/landscape-nature-mountan-alps-rainbow-76824355.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/sunflower-field-sunset-beautiful-nature-landscape-panorama-farm-field-idyllic-scene-sunflower-field-sunset-beautiful-nature-121481703.jpg'],
        ]);

        $memoTest2->images()->createMany([
            ['url' => 'https://thumbs.dreamstime.com/z/cute-cuddly-fuzzy-baby-animals-spring-lambs-sheep-siblings-snugg-snuggling-up-together-green-grass-look-like-smiling-109210933.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/baby-rabbit-eating-grass-outdoor-sunny-summer-day-easter-bunny-garden-home-pet-kid-cute-pets-animals-family-131767995.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/dolphins-jumping-over-waves-playful-breaking-hawaii-pacific-ocean-wildlife-scenery-marine-animals-natural-habitat-75896911.jpg'],
            ['url' => 'https://thumbs.dreamstime.com/z/african-red-elephant-wildlife-reserve-africa-s-big-five-animals-kenya-164370660.jpg'],
        ]);
    }
}
