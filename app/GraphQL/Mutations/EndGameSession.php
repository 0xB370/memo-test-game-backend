<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class EndGameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $gameSession = GameSession::findOrFail($args['id']);
        $gameSession->state = 'Completed';
        $gameSession->save();

        return $gameSession;
    }
}
