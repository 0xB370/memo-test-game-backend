<?php

namespace App\GraphQL\Mutations;
use App\Models\Image;
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

        $imageUrls = $args['input']['imageUrls'];

        foreach ($imageUrls as $imageUrl) {
            $image = new Image();
            $image->url = $imageUrl;
            $image->memo_test_id = $memoTest->id; // Asigna el ID del MemoTest creado a la relación
            $image->save();
        }

        // $memoTest->images = [$args['input']['imageUrls']]; // Accede directamente a 'imageUrls' en el campo 'input'

        return $memoTest;
    }
}
