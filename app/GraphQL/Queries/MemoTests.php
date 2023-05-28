<?php

namespace App\GraphQL\Queries;
use App\Models\MemoTest;

final class MemoTests
{
    /**
     * Retrieve all memo tests.
     *
     * @param  null  $_
     * @param  array{}  $args
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function __invoke($root, array $args)
    {
        return MemoTest::all();
    }
}
