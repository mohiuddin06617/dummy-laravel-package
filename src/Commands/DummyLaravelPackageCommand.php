<?php

namespace Mohiuddin06617\DummyLaravelPackage\Commands;

use Illuminate\Console\Command;

class DummyLaravelPackageCommand extends Command
{
    public $signature = 'dummy-laravel-package';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
