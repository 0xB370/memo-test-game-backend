<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Database\Eloquent\Model;

final class MemoTest extends Model
{
    protected $table = 'memo_tests';

    /**
     * Return a specific memo by ID.
     *
     * @param  mixed  $root
     * @param  array  $args
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo
     * @return \App\Models\Memo|null
     */
    public function __invoke($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): ?MemoTest
    {
        return MemoTest::findOrFail($args['id']);
    }

}
