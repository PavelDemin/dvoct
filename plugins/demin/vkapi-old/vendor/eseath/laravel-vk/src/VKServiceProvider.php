<?php
namespace Eseath\VK;

use Illuminate\Support\ServiceProvider;

class VKServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/vk.php' => config_path('vk.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/vk.php', 'vk');

        $this->app['vk'] = $this->app->share(function ($app) {
            return new VK($app['config']['vk']);
        });
    }
}
