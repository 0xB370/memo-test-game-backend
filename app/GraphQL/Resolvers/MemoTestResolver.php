<?php

namespace App\GraphQL\Resolvers;

use App\Models\MemoTest;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MemoTestResolver
{
    public function memoTests($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return MemoTest::all();
    }

    public function memoTest($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return MemoTest::findOrFail($args['id']);
    }
}
