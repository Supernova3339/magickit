<?php

namespace Supernova3339\Magickit;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Laravel\Ui\Presets\Preset;

class MagicKitPreset extends Preset
{
    const NPM_PACKAGES_TO_ADD = [
        '@tailwindcss/forms' => '^0.5.4',
        '@tailwindcss/typography' => '^0.5.9',
        'alpinejs' => '^3.12.3',
        'autoprefixer' => '^10.4.14',
        'tailwindcss' => '^3.3.3',
        'axios' => '^1.6.2',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->copyDirectory(__DIR__.'/../stubs/default', base_path());
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD
        );
    }

    /**
     * Update the contents of a file with the logic of a given callback.
     */
    protected static function updateFile(string $path, callable $callback)
    {
        $originalFileContents = file_get_contents($path);
        $newFileContents = $callback($originalFileContents);
        file_put_contents($path, $newFileContents);
    }
}
