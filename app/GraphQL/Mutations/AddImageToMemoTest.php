<?php

namespace App\GraphQL\Mutations;
use App\Models\Image;
use App\Models\MemoTest;

final class AddImageToMemoTest
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $memoTest = MemoTest::findOrFail($args['memoTestId']);
        $image = new Image();
        $image->url = $args['imageUrl'];
        $image->memo_test_id = $args['memoTestId'];
        $image->save();
        return $memoTest;
    }
}
