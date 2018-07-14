<?php

namespace App\Providers;

use App\Repositories\EloquentTask;
use App\Repositories\TaskInterface;
use App\Services\TaskServices;
use App\Task;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTaskRepo();
        $this->registerTaskService();


    }

    public function registerTaskRepo()
    {
        $this->app->bind('Repositories\TaskInterface', function ($app) {
            return new EloquentTask(new Task());
        });
    }

    public function registerTaskService()
    {
        $this->app->bind('TaskServices', function($app)
        {
            return new TaskServices(
            // Inject in our class of pokemonInterface, this will be our repository
                $this->$app->make('Repositories\TaskInterface')
            );
        });
    }
}