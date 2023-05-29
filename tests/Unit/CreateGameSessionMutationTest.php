<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;
use App\GraphQL\Mutations\CreateGameSession;

class CreateGameSessionMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testCreateGameSessionMutation()
    {
        // Define the input data for the mutation
        $input = [
            'memoTestId' => '1',
            'retries' => '2',
            'numberOfPairs' => '4',
            'state' => 'Started',
        ];

        // Run the mutation
        app(CreateGameSession::class)->__invoke(null, $input);

        // Check that a new GameSession has been created in the database
        $this->assertDatabaseHas('game_sessions', [
            'memo_test_id' => $input['memoTestId'],
            'retries' => $input['retries'],
            'number_of_pairs' => $input['numberOfPairs'],
            'state' => $input['state'],
        ]);

    }


}
