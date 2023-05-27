<?php

namespace App\GraphQL\Queries;

final class MemoTestQuery
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $id = $args['id'];
        return MemoTest::findOrFail($id);
    }
}
