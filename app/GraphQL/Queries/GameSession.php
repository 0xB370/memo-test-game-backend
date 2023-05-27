<?php

namespace App\GraphQL\Queries;
use App\Models\GameSession as GameSessionModel;
use Illuminate\Database\Eloquent\Model;

final class GameSession extends Model
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($root, array $args)
    {
        // $id = $args['id'];
        // return GameSession::findOrFail($id);

        $gs = GameSessionModel::findOrFail($args['id']);

        if (!$gs) {
            return null;
        }

        return $gs;
    }
}
