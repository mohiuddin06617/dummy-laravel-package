<?php

namespace Mohiuddin06617\DummyLaravelPackage\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Mohiuddin06617\DummyLaravelPackage\DummyLaravelPackageServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Mohiuddin06617\\DummyLaravelPackage\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DummyLaravelPackageServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_dummy-laravel-package_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
