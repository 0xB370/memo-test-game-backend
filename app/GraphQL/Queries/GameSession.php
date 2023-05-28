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
        $gs = GameSessionModel::findOrFail($args['id']);

        return $gs;
    }
}
