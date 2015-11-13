<?php

namespace Atan\Opensearch;

use Illuminate\Support\ServiceProvider;

class OpensearchServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('opensearch.php'),
        ]);

        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'opensearch'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerOpensearch();
    }

    private function registerOpensearch()
    {
        $this->app->singleton('opensearch',function($app){
            return new Opensearch($app);
        });
    }


    public function provides()
    {
        return ['opensearch'];
    }
}
