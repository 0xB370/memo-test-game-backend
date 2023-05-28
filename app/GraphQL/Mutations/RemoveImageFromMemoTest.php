<?php

namespace App\GraphQL\Mutations;
use App\Models\Image;
use App\Models\MemoTest;

final class RemoveImageFromMemoTest
{
    /**
     * Remove an image from a memo test.
     *
     * @param  null  $root
     * @param  array  $args
     * @return MemoTest
     */

    public function __invoke($root, array $args)
    {
        $memoTest = MemoTest::findOrFail($args['memoTestId']);
        $image = Image::findOrFail($args['imageId']);
        $image->delete();
        return $memoTest;
    }
}
