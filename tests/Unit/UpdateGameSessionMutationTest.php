<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use CreatesApplication;
use App\Models\GameSession;
use Tests\TestCase;
use App\GraphQL\Mutations\UpdateGameSession;

class UpdateGameSessionMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testUpdateGameSessionMutation()
    {
        // Create a test GameSession
        $gameSession = GameSession::factory()->create();

        // Define the new values for the GameSession
        $newNumberOfPairs = 10;

        // Make the GraphQL query to update the GameSession
        $mutation = new UpdateGameSession();
        $response = $mutation->__invoke(null, [
            'input' => [
                'id' => $gameSession->id,
                'numberOfPairs' => $newNumberOfPairs,
            ],
        ]);

        // Verify that the GameSession has been successfully updated
        $updatedGameSession = GameSession::find($gameSession->id);
        $this->assertEquals($newNumberOfPairs, $updatedGameSession->number_of_pairs);
        $this->assertEquals($gameSession->id, $response->id);
    }

}
