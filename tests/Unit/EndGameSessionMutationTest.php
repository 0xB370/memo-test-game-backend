<?php

namespace Tests\Unit;

use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;
use Tests\TestCase;
use CreatesApplication;
use App\GraphQL\Mutations\EndGameSession;
use App\Models\GameSession;



class EndGameSessionMutationTest extends TestCase
{
    use MakesGraphQLRequests;

    public function testEndGameSessionMutation()
    {
        // Create a GameSession to test
        $gameSession = GameSession::factory()->create();

        //Make the GraphQL query to end the GameSession
        $mutation = new EndGameSession();
        $response = $mutation->__invoke(null, ['id' => $gameSession->id]);

        // Verify that the GameSession has ended successfully
        $updatedGameSession = GameSession::find($gameSession->id);
        $this->assertEquals('Completed', $updatedGameSession->state);
        $this->assertEquals($gameSession->id, $response->id);
    }

}
