<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;

class MemoTestsQueryTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testMemoTestsQuery()
    {
        $response = $this->graphQL('
            query {
              memoTests {
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
                'memoTests' => [
                    [
                        'id',
                        'name',
                        'images' => [
                            [
                                'id',
                                'url'
                            ],
                        ],
                    ]
                ],
            ],
        ]);

    }

}
