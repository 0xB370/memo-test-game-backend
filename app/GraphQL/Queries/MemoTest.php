<?php

namespace App\GraphQL\Queries;

use App\Models\Memo;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class MemoTest
{
    /**
     * Return a specific memo by ID.
     *
     * @param  mixed  $root
     * @param  array  $args
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo
     * @return \App\Models\Memo|null
     */
    public function __invoke($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): ?Memo
    {
        return Memo::findOrFail($args['id']);
    }

}
