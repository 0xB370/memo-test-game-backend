<?php

namespace App\GraphQL\Mutations;
use App\Models\MemoTest;

final class CreateMemoTest
{
    /**
     * @param null $root
     * @param array $args
     * @return MemoTest
     */
    public function __invoke($root, array $args)
    {
        $memoTest = new MemoTest();
        $memoTest->name = $args['input']['name']; // Accede directamente a 'name' en el campo 'input'
        $memoTest->save();

        // $memoTest->images = [$args['input']['imageUrls']]; // Accede directamente a 'imageUrls' en el campo 'input'

        return $memoTest;
    }
}
