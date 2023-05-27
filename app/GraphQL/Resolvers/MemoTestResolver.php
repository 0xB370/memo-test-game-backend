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

    public function images($memoTest)
    {
        // Aquí debes implementar la lógica para obtener las imágenes asociadas al objeto MemoTest
        // Puedes utilizar el ORM o cualquier otro método que utilices para acceder a la base de datos

        // Por ejemplo, si estás utilizando Eloquent ORM:
        $memoTestId = $memoTest->id;
        $images = MemoTest::find($memoTestId)->images;

        return $images;
    }
}
