<?php

namespace Core\Providers;

use Domain\Article\Repositories\ArticleRepository;
use Domain\Article\Repositories\ArticleRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesArticleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
    }
}
