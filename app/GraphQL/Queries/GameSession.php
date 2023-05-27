<?php

namespace App\GraphQL\Queries;

final class GameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        $id = $args['id'];
        return GameSession::findOrFail($id);
    }
}
