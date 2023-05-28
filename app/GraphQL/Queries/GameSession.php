<?php

namespace App\GraphQL\Queries;
use App\Models\GameSession as GameSessionModel;
use Illuminate\Database\Eloquent\Model;

final class GameSession extends Model
{
    /**
     * Retrieve a game session by ID.
     *
     * @param  null  $root
     * @param  array  $args
     * @return GameSessionModel
     */
    public function __invoke($root, array $args)
    {
        return GameSessionModel::findOrFail($args['id']);
    }
}
