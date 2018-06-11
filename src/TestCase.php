<?php

namespace Pangolinkeys\TestFramework;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Pangolinkeys\TestFramework\Tests\Example\ExampleProvider;

class TestCase extends OrchestraTestCase
{

    protected function setUp()
    {
        parent::setUp();

        $this->artisan('migrate');

    }

    protected function getPackageProviders($app)
    {
        if (env('APP_ENV') === 'pangolinkeys_testing') {
            return [
                ExampleProvider::class,
            ];
        }

        return explode(', ', env('SERVICE_PROVIDERS'));
    }
}