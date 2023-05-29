<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;

class GameSessionQueryTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testGameSessionQuery()
    {
        $response = $this->graphQL('
            query {
              gameSession(id:1) {
                id
                state
                retries
                numberOfPairs
                memoTestId
              }
            }
        ');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'gameSession' => [
                    'id',
                    'state',
                    'retries',
                    'numberOfPairs',
                    'memoTestId',
                ],
            ],
        ]);

    }

}
