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
    }
}