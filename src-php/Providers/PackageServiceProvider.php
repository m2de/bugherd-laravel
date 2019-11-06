<?php

namespace M2de\Bugherd\Laravel\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->bootViews();
        $this->registerBladeComponents();
        $this->publishConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Load custom views
     *
     * @return void
     */
    private function bootViews()
    {
        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'bugherd');
        $this->publishes([
            __DIR__.'/../Resources/views' => resource_path('views/vendor/bugherd'),
        ]);
    }

    private function registerBladeComponents()
    {
        Blade::include('bugherd::script', 'bugherd');
    }

    /**
     * Publish configuration file.
     *
     * @return void
     */
    private function publishConfig()
    {
        $this->publishes([
            $this->getConfigPath() => config_path('bugherd.php'),
        ], 'config');
    }
    /**
     * Get local package configuration path.
     *
     * @return string
     */
    private function getConfigPath()
    {
        return __DIR__.'/../config.php';
    }
}
