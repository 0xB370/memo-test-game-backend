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
        $gameSession = GameSession::findOrFail($args['id']);
        $gameSession->numberOfPairsSelected = $args['numberOfPairsSelected'];
        $gameSession->save();

        return $gameSession;
    }
}
