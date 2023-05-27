<?php

use App\GraphQL\Resolvers\MemoTestResolver;
use App\GraphQL\Resolvers\MutationResolver;
use App\GraphQL\Resolvers\QueryResolver;

class GraphQLServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\\GraphQL\\Types';

    public function boot()
    {
        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Resolver', function ($app) {
            return new MemoTestResolver();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Mutation', function ($app) {
            return new MutationResolver();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Query', function ($app) {
            return new QueryResolver();
        });
    }
}
