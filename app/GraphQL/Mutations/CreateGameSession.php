<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class CreateGameSession
{
    /**
     * Create a new GameSession.
     *
     * @param  null  $root
     * @param  array  $args
     * @return GameSession
     */
    public function __invoke($root, array $args): GameSession
    {
        $gameSession = new GameSession();
        $gameSession->memo_test_id = $args['memoTestId'];
        $gameSession->retries = $args['retries'];
        $gameSession->number_of_pairs = $args['numberOfPairs'];
        $gameSession->state = $args['state'];
        $gameSession->save();

        return $gameSession;
    }
}
