<?php

namespace App\GraphQL\Queries;

final class MemoTests
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        return MemoTest::all();
    }
}
