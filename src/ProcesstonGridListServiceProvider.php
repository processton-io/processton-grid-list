<?php

namespace Processton\ProcesstonGridList;

use Illuminate\Support\ServiceProvider;

class ProcesstonGridListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('processton-grid-list', function () {
            return new ProcesstonGridList;
        });
    }
}
