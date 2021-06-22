<?php

namespace Mohiuddin06617\DummyLaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mohiuddin06617\DummyLaravelPackage\DummyLaravelPackage
 */
class DummyLaravelPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dummy-laravel-package';
    }
}
