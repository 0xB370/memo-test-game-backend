<?php

namespace App\GraphQL\Resolvers;

use App\Models\Image;
use App\Models\MemoTest;
use App\Models\GameSession;
use App\Enums\SessionState;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class MutationResolver
{
    public function createMemoTest($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $memoTest = new MemoTest();
        $memoTest->name = $args['input']['name'];
        $memoTest->save();

        $imageUrls = $args['input']['imageUrls'];
        foreach ($imageUrls as $imageUrl) {
            $image = new Image();
            $image->url = $imageUrl;
            $memoTest->images()->save($image);
        }

        return $memoTest;
    }

    public function addImageToMemoTest($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $memoTest = MemoTest::findOrFail($args['memoTestId']);

        $image = new Image();
        $image->url = $args['imageUrl'];
        $memoTest->images()->save($image);

        return $memoTest;
    }

    public function removeImageFromMemoTest($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $memoTest = MemoTest::findOrFail($args['memoTestId']);

        $memoTest->images()->where('id', $args['imageId'])->delete();

        return $memoTest;
    }

    public function deleteMemoTest($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        MemoTest::destroy($args['id']);

        return $args['id'];
    }

    public function createGameSession($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $gameSession = new GameSession();
        $gameSession->memoTestId = $args['memoTestId'];
        $gameSession->retries = $args['retries'];
        $gameSession->numberOfPairs = $args['numberOfPairs'];
        $gameSession->state = SessionState::Started;
        $gameSession->save();

        return $gameSession;
    }

    public function endGameSession($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $gameSession = GameSession::findOrFail($args['id']);
        $gameSession->state = SessionState::Completed;
        $gameSession->save();

        return $gameSession;
    }

    public function updateGameSession($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $gameSession = GameSession::findOrFail($args['input']['id']);
        $gameSession->numberOfPairsSelected = $args['input']['numberOfPairsSelected'];
        $gameSession->save();

        return $gameSession;
    }
}
