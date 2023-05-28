<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class UpdateGameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $gameSession = GameSession::findOrFail($args['input']['id']);
        $gameSession->number_of_pairs = $args['input']['numberOfPairs'];
        $gameSession->save();

        return $gameSession;
    }
}
