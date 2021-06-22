<?php

namespace Mohiuddin06617\DummyLaravelPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mohiuddin06617\DummyLaravelPackage\Commands\DummyLaravelPackageCommand;

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
