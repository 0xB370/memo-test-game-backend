<?php

namespace App\GraphQL\Mutations;
use App\Models\Image;
use App\Models\MemoTest;

final class CreateMemoTest
{
    /**
     * @param null $root
     * @param array $args
     * @return MemoTest
     */
    public function __invoke($root, array $args)
    {
        $memoTest = new MemoTest();
        $memoTest->name = $args['input']['name'];
        $memoTest->save();

        $imageUrls = $args['input']['imageUrls'];

        foreach ($imageUrls as $imageUrl) {
            $image = new Image();
            $image->url = $imageUrl;
            $image->memo_test_id = $memoTest->id;
            $image->save();
        }

        return $memoTest;
    }
}
