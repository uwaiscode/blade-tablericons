<?php

declare(strict_types=1);

namespace UwaisCode\BladeTablericons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeTablericonsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-tablericons', []);

            $factory->add('tablericons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-tablericons.php', 'blade-tablericons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-tablericons'),
            ], 'blade-tablericons');

            $this->publishes([
                __DIR__.'/../config/blade-tablericons.php' => $this->app->configPath('blade-tablericons.php'),
            ], 'blade-tablericons-config');
        }
    }
}
