<?php

namespace App\GraphQL\Mutations;
use App\Models\MemoTest;

final class DeleteMemoTest
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $memoTest = MemoTest::findOrFail($args['id']);
        $memoTest->delete();

        return $memoTest;
    }
}
