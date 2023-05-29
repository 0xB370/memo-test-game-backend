<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;

class MemoTestQueryTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testMemoTestQuery()
    {
        $response = $this->graphQL('
            query {
              memoTest(id: 1) {
                id
                name
                images {
                  id
                  url
                }
              }
            }
        ');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'memoTest' => [
                    'id',
                    'name',
                    'images' => [
                        [
                            'id',
                            'url'
                        ],
                    ],
                ],
            ],
        ]);

    }

}
