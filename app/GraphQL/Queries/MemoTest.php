<?php

namespace App\GraphQL\Queries;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
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
     * @return \App\Models\Memo|null
     */
    public function __invoke($root, $args)
    {
        $memo = MemoTestModel::find($args['id']);

        if (!$memo) {
            return null;
        }

        //$memo->load('images');

        return $memo;
    }

}
