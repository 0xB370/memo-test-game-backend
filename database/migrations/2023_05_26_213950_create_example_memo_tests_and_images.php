<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\MemoTest;
use App\Models\Image;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        $memoTest1 = new MemoTest();
        $memoTest1->name = 'Memo Test 1';
        $memoTest1->save();

        $image1 = new Image();
        $image1->url = 'https://example.com/image1.jpg';
        $memoTest1->images()->save($image1);

        $image2 = new Image();
        $image2->url = 'https://example.com/image2.jpg';
        $memoTest1->images()->save($image2);

        $memoTest2 = new MemoTest();
        $memoTest2->name = 'Memo Test 2';
        $memoTest2->save();

        $image3 = new Image();
        $image3->url = 'https://example.com/image3.jpg';
        $memoTest2->images()->save($image3);

        $image4 = new Image();
        $image4->url = 'https://example.com/image4.jpg';
        $memoTest2->images()->save($image4);

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('example_memo_tests_and_images');
    }
};
