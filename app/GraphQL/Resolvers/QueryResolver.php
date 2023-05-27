<?php

namespace App\GraphQL\Resolvers;

use App\Models\MemoTest;
use App\Models\GameSession;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class QueryResolver
{
    public function gameSession($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        return GameSession::findOrFail($args['id']);
    }

    public function images($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $gameSession = GameSession::findOrFail($args['id']);
        $memoTest = MemoTest::findOrFail($gameSession->memo_test_id);

        return $memoTest->images()->get();
    }
}
