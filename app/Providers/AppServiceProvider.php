<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\GraphQL\Queries\MemoTestsQuery;
use App\GraphQL\Queries\MemoTestQuery;
use App\GraphQL\Queries\GameSessionQuery;
use App\GraphQL\Queries\ImagesQuery;
use App\GraphQL\Mutations\CreateMemoTest;
use App\GraphQL\Mutations\AddImageToMemoTest;
use App\GraphQL\Mutations\RemoveImageFromMemoTest;
use App\GraphQL\Mutations\DeleteMemoTest;
use App\GraphQL\Mutations\CreateGameSession;
use App\GraphQL\Mutations\EndGameSession;
use App\GraphQL\Mutations\UpdateGameSession;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Query', function ($app) {
            return new QueryResolver();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new MemoTestsQuery();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new MemoTestQuery();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new GameSessionQuery();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new CreateMemoTest();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new AddImageToMemoTest();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new RemoveImageFromMemoTest();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new DeleteMemoTest();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new CreateGameSession();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new EndGameSession();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new UpdateGameSession();
        });

        $this->app->bind('Nuwave\\Lighthouse\\Schema\\Directive', function ($app) {
            return new ImagesQuery();
        });
    }
}
