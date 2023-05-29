<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;

class ImagesQueryTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testImagesQuery()
    {
        $response = $this->graphQL('
            query {
              images {
                id
                url
                memoTest {
                  id
                  name
                }
              }
            }
        ');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'images' => [
                    [
                        'id',
                        'url',
                        'memoTest' => [
                            'id',
                            'name',
                        ],
                    ]
                ],
            ],
        ]);

    }

}
