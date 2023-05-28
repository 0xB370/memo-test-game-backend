<?php

namespace App\GraphQL\Mutations;
use App\Models\Image;
use App\Models\MemoTest;


final class RemoveImageFromMemoTest
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $memoTest = MemoTest::findOrFail($args['memoTestId']);
        $image = Image::findOrFail($args['imageId']);
        $image->delete();
        return $memoTest;
    }
}
