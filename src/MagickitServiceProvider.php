<?php

namespace Supernova3339\Magickit;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;
use Supernova3339\Magickit\Magickit;
use Supernova3339\Magickit\MagicKitPreset;

class MagickitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        UiCommand::macro('magickit', function ($command) {
            MagicKitPreset::install();
            $command->info('MagicKit starter kit installed successfully.');
        });

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('magickit', function () {
            return new Magickit;
        });
    }
}
