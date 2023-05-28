<?php

namespace App\GraphQL\Queries;

use Illuminate\Database\Eloquent\Model;
use App\Models\MemoTest as MemoTestModel;

final class MemoTest extends Model
{
    protected $table = 'memo_tests';

    /**
     * Return a specific memo by ID.
     *
     * @param  mixed  $rootValue
     * @param  array  $args
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo
     * @return \App\Models\MemoTest
     */
    public function __invoke($root, $args)
    {
        return MemoTestModel::findOrFail($args['id']);
    }

}
