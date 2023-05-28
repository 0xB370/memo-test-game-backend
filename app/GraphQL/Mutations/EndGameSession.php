<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class EndGameSession
{
    /**
     * End a game session by updating its state to "Completed".
     *
     * @param  null  $root
     * @param  array  $args
     * @return GameSession
     */

    public function __invoke($root, array $args)
    {
        $gameSession = GameSession::findOrFail($args['id']);
        $gameSession->state = 'Completed';
        $gameSession->save();

        return $gameSession;
    }
}
