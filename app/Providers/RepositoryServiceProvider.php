<?php

namespace App\Providers;

use App\Repositories\Books\BookRepository;
use App\Repositories\Books\ElequentBook;
use App\Repositories\Categories\CategoryRepository;
use App\Repositories\Categories\ElequentCategory;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register() 
    {
    $this->app->bind(BookRepository::class , ElequentBook::class);
    $this->app->bind(CategoryRepository::class , ElequentCategory::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
