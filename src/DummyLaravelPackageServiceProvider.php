<?php

namespace Mohiuddin06617\DummyLaravelPackage;

use Mohiuddin06617\DummyLaravelPackage\Commands\DummyLaravelPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DummyLaravelPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dummy-laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dummy-laravel-package_table')
            ->hasCommand(DummyLaravelPackageCommand::class);
    }
}
