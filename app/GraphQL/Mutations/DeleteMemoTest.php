<?php

namespace App\GraphQL\Mutations;
use App\Models\MemoTest;

final class DeleteMemoTest
{
    /**
     * Delete an existing MemoTest.
     *
     * @param  null  $root
     * @param  array  $args
     * @return MemoTest
     */
    public function __invoke($root, array $args)
    {
        $memoTest = MemoTest::findOrFail($args['id']);
        $memoTest->delete();

        return $memoTest;
    }
}
