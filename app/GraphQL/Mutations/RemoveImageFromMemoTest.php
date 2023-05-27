<?php

namespace App\GraphQL\Mutations;
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
        $memoTest->images()->detach($args['imageIds']);

        return $memoTest;
    }
}
