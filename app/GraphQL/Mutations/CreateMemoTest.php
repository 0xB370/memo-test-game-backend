<?php

namespace App\GraphQL\Mutations;
use App\Models\MemoTest;

final class CreateMemoTest
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $memoTest = new MemoTest();
        $memoTest->name = $args['name'];
        $memoTest->save();

        $memoTest->images()->sync($args['images']);

        return $memoTest;
    }
}
