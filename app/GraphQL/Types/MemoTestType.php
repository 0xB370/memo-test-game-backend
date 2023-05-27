<?php

namespace App\GraphQL\Types;

use App\Models\MemoTest;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class MemoTestType extends GraphQLType
{
    protected $attributes = [
        'name' => 'MemoTest',
        'description' => 'A memo test type',
        'model' => MemoTest::class, // Modelo eloquent relacionado
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::ID()),
                'description' => 'The ID of the memo test',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the memo test',
            ],
            'images' => [
                'type' => Type::listOf(Type::string()),
                'description' => 'The images of the memo test',
                'resolve' => function ($root) {
                    return $root->images->pluck('url')->toArray();
                },
            ],
        ];
    }
}
